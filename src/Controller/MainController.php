<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $numberOfStarship = 442;
        $myShip = [
            'name' => 'Uss LeafyCruiser (NCC-0001)',
            'class' => 'Garden',
            'captain' => 'Eric Mabiala',
            'status' => 'Under construction',
        ];

        return $this->render('main/homepage.html.twig', [
            'starship' => $numberOfStarship,
            'myShip' => $myShip,
        ]);
    }
}
