<?php
namespace Users\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Validator\Constraints\Length;

use Users\ManagementBundle\Entity\User;
use Users\ManagementBundle\Entity\ChangePasswordRequests;
use Users\ManagementBundle\Form\ForgotPasswordType;
use Users\ManagementBundle\Form\PasswordType;

class LoginController extends Controller
{
	public function doLoginAction(Request $request)
	{
		$session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContextInterface::AUTHENTICATION_ERROR
            );
        } elseif (null !== $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContextInterface::LAST_USERNAME);

        return $this->render(
            'UsersManagementBundle:Account:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }

    public function forgotPasswordAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ChangePasswordRequests = new ChangePasswordRequests();

        $forgotPasswordForm = $this->createForm(new ForgotPasswordType(), $ChangePasswordRequests);

        //$date = date('Y-m-d H:m:s',time() - 60 * 60 * 6);
        //$dateTime = date_create($date);

        $dateTime = new \DateTime("now");

        $ChangePasswordRequests->setRequestedAt($dateTime);

        if ($request->getMethod() == 'POST') {

            $forgotPasswordForm->submit($request);

            if ($forgotPasswordForm->isValid()) {

                $user = new User();
                $email = $forgotPasswordForm["email"]->getData();
                $user = $this->getDoctrine()->getRepository('UsersManagementBundle:User')->findOneBy(array('email' => $email));
                if (!$user) {
                    $this->get('session')->getFlashBag()->add('alert-danger', 'Please use a registered email addres.');
                    return $this->redirect($this->generateUrl('forgot_password'));
                } else {

                    $ChangePasswordRequests->setEmail($email);
                    $uniqueKey = md5(uniqid($email));
                    $ChangePasswordRequests->setAccountStatus(0);

                    $em->persist($ChangePasswordRequests);
                    $em->flush();

                    //sending of email
                    $message = \Swift_Message::newInstance()
                        ->setSubject('Forgot Password Request')
                        ->setFrom('joan.villariaza@chromedia.com')
                        ->setTo($email)
                        ->setBody($this->renderView(
                            'UsersManagementBundle:Email:forgotPassword.html.twig', array(
                                'name' => $user->getFirstName(),
                                'confirmationLink' => $this->generateUrl('forgot_password_check', array('id' => $ChangePasswordRequests->getId(), 'uniqueKey' => $uniqueKey), true)
                            )
                        ));
                    $this->get('mailer')->send($message);

                    

                    $this->get('session')->getFlashBag()->add('alert-success', 'Please click the link sent to your mailbox for resetting the password. Thank you.');
                    return $this->redirect($this->generateUrl('user_login'));
                }
            }
        }
        return $this->render('UsersManagementBundle:Account:forgotPassword.html.twig', array('form' => $forgotPasswordForm->createView()));

    }

    public function forgotPasswordCheckAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ChangePasswordRequests = new ChangePasswordRequests();

        $passwordResetRequest = $em->getRepository('UsersManagementBundle:ChangePasswordRequests')->find($id);
        $email = $passwordResetRequest->getEmail();
        $user = $em->getRepository('UsersManagementBundle:User')->findOneByEmail($email);
        $status = $passwordResetRequest->getAccountStatus();

        if ($status == 0) {
            $resetPasswordForm = $this->createForm(new PasswordType(), $user);

            if ($request->getMethod() == 'POST') 
            {
                $resetPasswordForm->submit($request);
                $dateRequested = $passwordResetRequest->getRequestedAt();
                $dateVerified = new \DateTime("now");

                $dateInterval = $dateRequested->diff($dateVerified);
                $dateInterval = $dateInterval->format('%y, %m, %d');

                if ($resetPasswordForm->isValid()){
                    if ($dateInterval == '0, 0, 0') {

                        $password = $resetPasswordForm["password"]->getData();
                        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
                        $password = $encoder->encodePassword($password, $user->getSalt());
                        $user->setPassword($password);
                        
                        $em->persist($user);
                        $em->flush();

                        // update status so the URL will no longer be accessible the next time the user try to change his password again
                        $passwordResetRequest->setAccountStatus(1);
                        $em->persist($passwordResetRequest);
                        $em->flush();

                        $this->get('session')->getFlashBag()->add('alert-success', 'Successfully reset password.');
                        return $this->redirect($this->generateUrl('user_login'));
                    }
                }
            }
        } 
        else {
            $this->get('session')->getFlashBag()->add('alert-success', 'The URL that you are trying to access has expired. Please get a new one.');
            return $this->redirect($this->generateUrl('user_login'));
        }
        return $this->render('UsersManagementBundle:Account:resetPassword.html.twig', array('form' => $resetPasswordForm->createView()));

    }
}