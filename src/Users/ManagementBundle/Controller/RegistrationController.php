<?php
namespace Users\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Users\ManagementBundle\Entity\User;
use Users\ManagementBundle\Form\UserType;

class RegistrationController extends Controller
{
	public function registerAction(Request $request)
	{
		$User = new User();

		$registrationForm = $this->createForm(new UserType(), $User);
		
		$User->setAccountStatus(0);
		$User->setSalt(md5(uniqid(mt_rand()))); 

		$registrationForm->handleRequest($request);
		
		if ($registrationForm->isValid()) {

			$encoder = $this->container->get('security.encoder_factory')->getEncoder($User);
			$password = $encoder->encodePassword($User->getPassword(), $User->getSalt());
			$User->setPassword($password);

			// Code for confirmation email
			$confirmationId = $encoder->encodePassword($User->getEmail(), $User->getSalt());
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($User);
			$em->flush();

			//sending of email
			$message = \Swift_Message::newInstance()
				->setSubject('Confirm Your Email')
				->setFrom('joan.villariaza@chromedia.com')
				->setTo($User->getEmail())
				->setBody($this->renderView(
					'UsersManagementBundle:Email:confirmation.html.twig', array(
						'name' => $User->getFirstName(), 
						'confirmationLink' => $this->generateUrl('confirm_user_registration', array('id' => $User->getId(), 'confirmationId' => $confirmationId), true)
					)
				));
			$this->get('mailer')->send($message);
			$this->get('session')->getFlashBag()->add('alert-success', 'You have successfully created your account. Please click the link sent to your mailbox for account confirmation. Thank you.');
		}

		return $this->render('UsersManagementBundle:Account:registration.html.twig', array(
			'form' => $registrationForm->createView(),
		));

	}

	//Email Confirmation
	public function confirmEmailAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();

		$user = $em->getRepository('UsersManagementBundle:User')->find($id);

		//checking if user already activated his/her account.
		if($user->getAccountStatus() == 1){
			$this->get('session')->getFlashBag()->add('alert-success', 'You cannot activate your account more than once.');
			return $this->redirect($this->generateUrl('user_login'));
		}

		// Changing user status to active
		$user->setAccountStatus(1);
		$em->flush();
		$this->get('session')->getFlashBag()->add('alert-success', 'You have successfully activated your account.');
		return $this->redirect($this->generateUrl('user_login', array('message' => '==', true)));
		
	}
}