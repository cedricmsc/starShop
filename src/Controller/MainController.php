<?php
namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController
{
    #[Route('/')]
    public function homepage(): Response
    {
      return new response('<strong>Starshop</strong>: your monopy-busting option for Starship parts!');
    }
}