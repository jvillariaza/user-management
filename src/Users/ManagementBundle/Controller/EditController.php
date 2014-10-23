<?php
namespace Users\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\SecurityContextInterface;

use Users\ManagementBundle\Entity\User;
use Users\ManagementBundle\Form\AccountType;
use Users\ManagementBundle\Form\ChangePasswordType;

class EditController extends Controller
{
	public function editAccountAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('UsersManagementBundle:User')->find($id);

		if (!$user) {
			throw $this->createNotFountException('Account no longer exists in the database');
		}

		$editForm = $this->createForm(new AccountType(), $user);

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

		$changePasswordForm = $this->createForm(new ChangePasswordType(), $user);

		if ($request->getMethod() == 'POST') {
				$changePasswordForm->submit($request);

			if ($changePasswordForm->isValid()) {

				//var_dump("nisulod ko"); die;
				$password = $changePasswordForm["curPassword"]->getData();
				$encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
				$password = $encoder->encodePassword($password, $user->getSalt());

				if ($password == $currentPassword) {
					
					$newpassword = $changePasswordForm["password"]->getData();
					$encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
					$user->setPassword($encoder->encodePassword($newpassword, $user->getSalt()));

					$em->persist($user);
					$em->flush();

					$this->get('session')->getFlashBag()->add('alert-success', 'Successfully changed password.');
                    return $this->redirect($this->generateUrl('change_password', array('id' => $user->getId())));
				}

				$this->get('session')->getFlashBag()->add('alert-danger', 'Password mismatch');
                return $this->redirect($this->generateUrl('change_password', array('id' => $user->getId())));
			}
		}
		return $this->render('UsersManagementBundle:Account:changePassword.html.twig', array('form' => $changePasswordForm->createView()));
	}
}