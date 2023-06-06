<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OsefController extends AbstractController
{
    #[Route('/osef', name: 'app_osef')]
    public function index(): Response
    {
        return $this->render('osef/index.html.twig', [
            'controller_name' => 'OsefController',
        ]);
    }
}
