<?php

namespace Users\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
       $session = $request->getSession();
       $user = $this->getUser();

        return $this->render('UsersManagementBundle:Account:dashboard.html.twig', array('user' => $user, 'editAccount' => $this->generateUrl('register_user'), 'changePassword' => $this->generateUrl('register_user')));
    }

}
