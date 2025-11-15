<?php

use app\controller\HomerController;
use app\controller\LoginController;
use app\controller\ProductController;
use core\library\Router;

try{

    $router = new Router;
    $router->add("GET","/", [HomerController::class, "index"] );
    $router->add("GET","/product", [ProductController::class, "index"] );
    $router->add("GET","/product/([a-z\-]+)", [ProductController::class, "index"] );
    $router->add("GET","/product/([a-z\-]+)/category/([1-9\]+)", [ProductController::class, "index"]);


    $router->add("GET","/login", [LoginController::class, "index"]);
    $router->add("POST","/login", [LoginController::class, "store"]);

    $router->execute();

}

catch (\Throwable $th){

    http_response_code(500);
    echo "Erro interno: " . $th->getMessage();

}
