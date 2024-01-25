<?php
namespace src\controllers;

use League\Plates\Engine;

abstract class Controller
{
    public function view(string $view, array $data =[]){
        $pathViews = dirname(__FILE__,2) . DIRECTORY_SEPARATOR;
        $templates = new Engine($pathViews);

        echo $templates->render($view, $data);
    }

}