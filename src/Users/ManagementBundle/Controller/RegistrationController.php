<?php
namespace Users\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Users\ManagementBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController extends Controller
{
	public function registerAction(Request $request)
	{
		//building the form
		$User = new User();
		$registrationForm = $this->createFormBuilder($User)
			->add('firstName', 'text', array('label' => 'First Name: ', 'attr' => array('class' => 'form-control')))
			->add('lastName', 'text', array('label' => 'Last Name: ', 'attr' => array('class' => 'form-control')))
			->add('email','email', array('label' => 'Email Address: ', 'attr' => array('class' => 'form-control')))
			->add('password', 'repeated', array(
				'first_name'  => 'password',
				'second_name' => 'confirm',
				'type' 		  => 'password'
			))
			
			->add('save', 'submit', array('label' => 'Create Account', 'attr' => array('class' => 'btn btn-lg btn-primary btn-block')))
			->getForm();
		
		$User->setAccountStatus(0);
		$User->setSalt(uniqid(mt_rand())); 

		$registrationForm->handleRequest($request);
		
		if($registrationForm->isValid()){
			
			// Set encrypted password
			$encoder = $this->container->get('security.encoder_factory')->getEncoder($User);
			$password = $encoder->encodePassword($User->getPassword(), $User->getSalt());
			$User->setPassword($password);

			// For confirmation email
			$confirmationId = $encoder->encodePassword($User->getEmail(), $User->getSalt());

			//push to database
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
			$this->get('session')->getFlashBag()->add('alert-success', 'You cannot activate account more than once.');
			return $this->redirect($this->generateUrl('user_login'));
		}

		// Changing user status to active
		$user->setAccountStatus(1);
		$em->flush();
		$this->get('session')->getFlashBag()->add('alert-success', 'You have successfully activated your account.');
		return $this->redirect($this->generateUrl('user_login', array('message' => '==', true)));
		
	}
}