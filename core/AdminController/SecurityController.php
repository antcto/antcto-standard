<?php

namespace AntCTO\AdminController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login.html", name="_login")
     */
    public function index()
    {
        return $this->render('@admin_theme/security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }
}
