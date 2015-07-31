<?php

namespace IAD\UserBundle\Controller;

use IAD\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction(User $user)
    {
        return $this->render('IADUserBundle:Default:index.html.twig', array('name' => $user->getUsername()));
    }
}
