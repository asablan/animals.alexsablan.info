<?php

namespace App\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use App\Extensions\GlideExtension;

class BaseController
{
    protected $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(__DIR__ . '/../views');
        $this->twig = new Environment($loader);
        $this->twig->addExtension(new GlideExtension());
    }

    protected function render($template, $data = [])
    {
        echo $this->twig->render($template, $data);
    }
}
