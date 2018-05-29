<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomePageController extends Controller
{
    /**
     * @Route("/", name="home_page")
     */
    public function index()
    {

        $number = mt_rand(0, 100);

        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'number' => $number,
        ]);
    }
}
