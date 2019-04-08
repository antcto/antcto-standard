<?php

namespace AntCTO\AdminController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard.html", name="_admin_dashboard")
     */
    public function index()
    {
        return $this->render('@admin_theme/dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
