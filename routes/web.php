<?php

use app\controller\HomerController;
use app\controller\LoginController;
use app\controller\ProductController;
use core\library\Router;



    $router = new Router;
    $router->add("GET","/", [HomerController::class, "index"] );
    $router->add("GET","/product", [ProductController::class, "index"] );
    $router->add("GET","/product/([a-z\-]+)", [ProductController::class, "index"] );
    $router->add("GET","/product/([a-z\-]+)/category/([0-9]+)", [ProductsController::class, "index2"]);


    $router->add("GET","/login", [LoginController::class, "index"]);
    $router->add("POST","/login", [LoginController::class, "store"]);

    $router->execute();



