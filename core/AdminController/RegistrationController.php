<?php

namespace AntCTO\AdminController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register.html", name="_register")
     */
    public function index()
    {
        return $this->render('@admin_theme/registration/index.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }
}
