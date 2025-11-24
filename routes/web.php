<?php

use app\controller\HomerController;
use app\controller\LoginController;
use app\controller\ProductController;
use core\library\Router;


/** @var TYPE_NAME $app */
$router = new Router($app->container);
    $router->add("GET","/", [HomerController::class, "index"] );
    $router->add("GET","/product", [ProductController::class, "index"] );
    $router->add("GET","/product/([a-z\-]+)", [ProductController::class, "index"] );
    $router->add("GET","/product/([a-z\-]+)/category/([0-9]+)", [ProductController::class, "index"]);


    $router->add("GET","/login", [LoginController::class, "index"]);

    $router->add("POST","/login", [LoginController::class, "store"]);

    $router->execute();



