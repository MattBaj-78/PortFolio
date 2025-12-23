<?php

namespace App\Controller\VeilleTechnologique;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DécouverteController extends AbstractController
{
    #[Route('/découverte', name: 'découverte')]
    public function index(): Response
    {
        return $this->render('découverte/index.html.twig',
        [
            'controller_name' => 'DécouverteController',
        ]);
    }
}
