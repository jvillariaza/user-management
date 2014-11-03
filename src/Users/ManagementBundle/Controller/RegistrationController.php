<?php
namespace Users\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Users\ManagementBundle\Entity\User;
use Users\ManagementBundle\Form\UserType;
use Users\ManagementBundle\Helper\Constants;

class RegistrationController extends Controller
{
	public function registerAction(Request $request)
	{
		$User = new User();
		$registrationForm = $this->createForm(new UserType(), $User);
		
		$User->setAccountStatus(0);
		$User->setSalt(md5(uniqid(mt_rand()))); 

		$registrationForm->handleRequest($request);
		$error = false;

		if ($request->getMethod() == 'POST') {
		
			if ($registrationForm->isValid()) {

				$encoder = $this->container->get('security.encoder_factory')->getEncoder($User);
				$password = $encoder->encodePassword($User->getPassword(), $User->getSalt());
				$User->setPassword($password);

				$confirmationId = $encoder->encodePassword($User->getEmail(), $User->getSalt());
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($User);
				$em->flush();

				$this->get('session')->getFlashBag()->add('alert-success', Constants::SUCCESSFUL_REGISTRATION);

				//sending of email
				$mailBody = $this->renderView('UsersManagementBundle:Email:confirmation.html.twig', array('name' => $User->getFirstName(), 'confirmationLink' => $this->generateUrl('confirm_user_registration', array('id' => $User->getId(), 'confirmationId' => $confirmationId), true)));
				$this->get('service_emailer')->sendWithSwiftMailer(Constants::CONFIRMATION_EMAIL_SUBJECT, $User->getEmail(), $mailBody);
			}else $error = true;
		}
		return $this->render('UsersManagementBundle:Account:registration.html.twig', array('form' => $registrationForm->createView(), 'error' => $error));
	}

	//Email Confirmation
	public function confirmEmailAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();

		$user = $em->getRepository('UsersManagementBundle:User')->find($id);

		//checking if user already activated his/her account.
		if($user->getAccountStatus() == 1){
			$this->get('session')->getFlashBag()->add('alert-danger', Constants::EXPIRED_URL);
			return $this->redirect($this->generateUrl('user_login'));
		}

		// Changing user status to active
		$user->setAccountStatus(1);
		$em->flush();
		$this->get('session')->getFlashBag()->add('alert-success', Constants::SUCCESSFUL_CONFIRMATION);
		return $this->redirect($this->generateUrl('user_login'));
		
	}
}