<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndeexController extends AbstractController
{
    /**
     * @Route("/", name="indeex")
     */
    public function index()
    {
        return $this->render('indeex/index.html.twig', [
            'controller_name' => 'IndeexController',
        ]);
    }
}
