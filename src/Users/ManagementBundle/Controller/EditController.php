<?php
namespace Users\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Users\ManagementBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\SecurityContextInterface;

class EditController extends Controller
{
	public function editAccountAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('UsersManagementBundle:User')->find($id);

		if (!$user) {
			throw $this->createNotFountException('Account no longer exists in the database');
		}

		$editForm = $this->createFormBuilder($user)
			->add('firstName','text', array('attr' => array('class' => 'form-control')))
			->add('lastName', 'text', array('attr' => array('class' => 'form-control')))
			->add('save', 'submit', array('label' => 'Edit Account', 'attr' => array('class' => 'btn btn-lg btn-primary btn-block')))
			->getForm();

		$email = $user->getEmail();

		if ($request->getMethod() == 'POST')
        {
        	$editForm->submit($request);

        	if ($editForm->isValid()) {
        		$firstName = $editForm["firstName"]->getData();
        		$lastName = $editForm["lastName"]->getData();
        		
        		$user->setFirstName($firstName);
        		$user->setLastName($lastName);

        		$em->persist($user);
        		$em->flush();

        		return $this->redirect($this->generateUrl('dashboard'));
        	}else{
        		foreach ($editForm->getErrors() as $error) {
        			# code...
        			$error;
        		}
        		$this->get('session')->getFlashBag()->add('alert-danger', $error);
                return $this->redirect($this->generateUrl('dashboard'));
        	}
        }
        return $this->render('UsersManagementBundle:Account:editAccount.html.twig', array('email' => $email, 'form' => $editForm->createView()));
	}

	public function changePasswordAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('UsersManagementBundle:User')->find($id);

		$currentPassword = $user->getPassword();

		$changePasswordForm = $this->createFormBuilder($user)
			->add('curPassword','password', array('label' => 'Current Password ', 'attr' => array('class' => 'form-control'), 'mapped' => false))
			->add('password', 'repeated', array('first_name' => 'NewPassword', 'second_name' => 'ConfirmPassword', 'type' => 'password'))
			->add('save', 'submit', array('label' => 'Change Password', 'attr' => array('class' => 'btn btn-lg btn-primary btn-block')))
			->getForm();

		if ($request->getMethod() == 'POST') {
				$changePasswordForm->submit($request);

			if ($changePasswordForm->isValid()) {

				//var_dump("nisulod ko"); die;
				$password = $changePasswordForm["curPassword"]->getData();
				$encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
				$password = $encoder->encodePassword($password, $user->getSalt());

				if ($password == $currentPassword) {
					$newpassword = $changePasswordForm["password"]->getData();

					//if(strlen($newpassword) >= 6){
						$encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
						$user->setPassword($encoder->encodePassword($newpassword, $user->getSalt()));

						$em->persist($user);
						$em->flush();

						$this->get('session')->getFlashBag()->add('alert-success', 'Successfully changed password.');
	                    return $this->redirect($this->generateUrl('change_password', array('id' => $user->getId())));
					//}
					//$this->get('session')->getFlashBag()->add('alert-danger', 'New Password is invalid. Make sure they match and has at least 6 characters.');
                	//return $this->redirect($this->generateUrl('change_password', array('id' => $user->getId())));
				}

				$this->get('session')->getFlashBag()->add('alert-danger', 'Password mismatch');
                return $this->redirect($this->generateUrl('change_password', array('id' => $user->getId())));
			}
		}
		return $this->render('UsersManagementBundle:Account:changePassword.html.twig', array('form' => $changePasswordForm->createView()));
	}
}