<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $this->render('pages/index.html.twig');
    }
}
