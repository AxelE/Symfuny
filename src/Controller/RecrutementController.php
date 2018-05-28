<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecrutementController extends Controller
{
    /**
     * @Route("/recrutement", name="recrutement")
     */
    public function index()
    {
        return $this->render('recrutement/index.html.twig', [
            'controller_name' => 'RecrutementController',
        ]);
    }
}
