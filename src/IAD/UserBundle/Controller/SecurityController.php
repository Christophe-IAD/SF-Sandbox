<?php

namespace IAD\UserBundle\Controller;

use FOS\UserBundle\FOSUserBundle;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SecurityController extends \FOS\UserBundle\Controller\SecurityController
{
    public function loginAction(Request $request)
    {
        echo "OK !"; exit;
    }
}
