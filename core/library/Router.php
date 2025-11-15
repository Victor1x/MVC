<?php

namespace core\library;

class Router
{
    protected array $routes = [];
    protected ?string $controller = null;
    protected string $action;
    protected array $params = [];

    public function add(string $method, string $uri, array $route): void
    {
        $this->routes[$method][$uri] = $route;
    }


    public function execute()
    {
        foreach ($this->routes as $request => $routes) {
            if ($request === REQUEST_METHOD) { //pega o METHOD (get,post ou os outros )
                return $this->handleUri($routes); //pessa a array com todas as rotas que usando esse METHOD (exemplo get)
            }
        }
    }

    private function handleUri(array $routes)
    {
        foreach ($routes as $uri => $route) { // aqui ele entra na array [ "/" => [caminho da class , metodo a ser usado ] o "/"  é a uri

            //esse bloco de codigo pega as roda sem paramentros
            if ($uri === REQUEST_URI) {
                [$this->controller, $this->action] = $route;
                break;
            }

            //esse bloco de codigo pega as roda com paramentros
            $pattern = str_replace("/", "\/", trim($uri)); // str_replace funcao do php para pega paga um testo s
            if ($uri !== "/" && preg_match("/^($pattern)$/", trim(REQUEST_URI), $this->params)) {
                [$this->controller, $this->action] = $route;
                unset($this->params[0]);
                break;
            }
        }

        if ($this->controller) {
            return $this->handleController();
        };

        return $this->handleNotFound();
    }

    private function handleController()
    {
//        dd('temm controller');
    }

    private function handleNotFound()
    {
        dd('nao tem controller');
    }


}