<?php
namespace src\Routes;

use src\helpers\Request;
use Exception;
use src\helpers\Uri;


class Router
{
    const CONTROLLER_NAMESPACE = 'src\\controllers';
    public static function load (string $controller, string $method){
        try {
            //code...
            $controllerNamespace = self::CONTROLLER_NAMESPACE . '\\' .$controller;
            if(!class_exists($controllerNamespace)){
                throw new Exception("Esse Controller não existe ");
                
            }
            $controllerInstance = new $controllerNamespace;
            if(!method_exists($controllerInstance, $method)){
                throw new Exception("o metodo não existe no controller");
            }
            $controllerInstance->$method();

        } catch (\Throwable $th) {
            //throw $th;
            echo $th->getMessage();
        }
    }
    public static function Routes ():array
    {
        return
        [
            'get'=>[
                '/contasareceber'=> 'ContasaReceberController',
                '/cadastrarfuncionario'=> fn()=>self::load('CadastrarFuncionarioController','index'),
                '/cadastrodecardapio'=> fn()=> self::load('CadastrarCardapioController','Cardapio'),
                '/'=> fn() =>  self::load('HomeController','index'),
            ],
            'post'=>[],
            'put'=>[],
            'delete'=>[],

        ];
    }
    public static function execute(){
        try {
            //code...
            $routes = self::Routes();
            $request = Request::get();
            $uri = Uri::get('path');

            if(!isset($routes[$request])){
                throw new Exception("A rota não existe ");
                
            }
            if(!array_key_exists($uri, $routes[$request])){
                throw new Exception('A rota não existe');
            }
            $router = $routes[$request][$uri];
            if(!is_callable($router)){
                throw new Exception("Nao exites");
                
            }
            $router();

        } catch (\Throwable $th) {
            //throw $th;
            echo $th->getMessage();
        }

    }
}