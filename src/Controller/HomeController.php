<?php
namespace App\controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use symfony\component\HttpFoundation\dd;

class HomeController extends AbstractController
{
    public function numbers()
    {
        $number =rand(0, 250);

        return $this->render('base.html.twig', [
            "number" => $number
        ]);

    }
 }