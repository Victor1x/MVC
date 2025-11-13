<?php

namespace core\library;

class Router
{
    protected $routes = [];

    public function add(string $method, string $uri, array $route): void
    {
        $this->routes[$method][$uri] = $route;
    }


    public function execute()
    {
        foreach ($this->routes as $request => $routes) {
            if ($request === $_SERVER['REQUEST_METHOD']) { //pega o METHOD (get,post ou os outros )
                return $this->handleUri($routes); //pessa a array com todas as rotas que usando esse METHOD (exemplo get)
            }
        }
    }

    private function handleUri(array $routes)
    {
        foreach ($routes as $uri => $route) { // aqui ele entra na array [ "/" => [caminho da class , metodo a ser usado ] o "/"  é a uri

            if ($uri === $_SERVER['REQUEST_URI']) {


                $controller = new $route[0];

                $action = $route[1]; // $action metodo da class


                return $controller->$action();
            }

        }
    }
}