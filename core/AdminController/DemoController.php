<?php

namespace AntCTO\AdminController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route("/demo.html", name="demo_admin")
     */
    public function index()
    {
        return $this->render('@admin_theme/demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }
}
