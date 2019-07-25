<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/home")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request)
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'debug' => [
                'ip' => $request->getClientIp(),
                'locale' => $request->getLocale()
            ]
        ]);
    }
}
