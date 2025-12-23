<?php

namespace App\Controller\VeilleTechnologique;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DeNosJoursController extends AbstractController
{
    #[Route('/de-nos-jours', name: 'de-nos-jours')]
    public function index(): Response
    {
        return $this->render('de-nos-jours/index.html.twig',
        [
            'controller_name' => 'DeNosJoursController',
        ]);
    }
}
