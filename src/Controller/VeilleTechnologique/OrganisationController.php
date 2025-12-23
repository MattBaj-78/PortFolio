<?php

namespace App\Controller\VeilleTechnologique;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrganisationController extends AbstractController
{
    #[Route('/organisation', name: 'organisation')]
    public function index(): Response
    {
        return $this->render('organisation/index.html.twig',
        [
            'controller_name' => 'OrganisationController',
        ]);
    }
}
