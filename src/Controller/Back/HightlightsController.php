<?php

namespace App\Controller\Back;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HightlightsController extends Controller
{
    /**
     * @Route("/hightlights", name="hightlights")
     */
    public function index()
    {
        return $this->render('hightlights/index.html.twig', [
            'controller_name' => 'HightlightsController',
        ]);
    }
}
