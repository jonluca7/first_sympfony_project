<?php
namespace App\controller;

use symfony\component\HttpFoundation\dd;

class HomeController
{
    public function numbers()
    {
        dd(rand(0, 250));
    }
 }