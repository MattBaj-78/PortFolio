<?php

namespace App\Controller\VeilleTechnologique;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CaractéristiquesController extends AbstractController
{
    #[Route('/caractéristiques', name: 'caractéristiques')]
    public function index(): Response
    {
        return $this->render('caractéristiques/index.html.twig',
        [
            'controller_name' => 'CaractéristiquesController',
        ]);
    }
}
