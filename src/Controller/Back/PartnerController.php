<?php

namespace App\Controller\Back;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartnerController extends Controller
{
    /**
     * @Route("/partner", name="partner")
     */
    public function index()
    {
        return $this->render('partner/index.html.twig', [
            'controller_name' => 'PartnerController',
        ]);
    }
}
