<?php

namespace App\Controller\VeilleTechnologique;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AvantagesController extends AbstractController
{
    #[Route('/avantages', name: 'avantages')]
    public function index(): Response
    {
        return $this->render('avantages/index.html.twig',
        [
            'controller_name' => 'AvantagesController',
        ]);
    }
}
