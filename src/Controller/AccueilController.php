<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueilName")
     */
    
    public function index(): Response
    {
        $prenomController = 'Rach';
        return $this->render('accueil/index.html.twig', [
            'prenomTwig'=> $prenomController
        ]);
    }

    /**
     * @Route("/presentation", name="presentationName")
     */
    public function home():Response
    {
        
        return $this->render('accueil/presentation.html.twig', [
            
        ]);
    }
}

    


