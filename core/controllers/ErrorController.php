<?php

namespace core\controllers;

class ErrorController
{


    public function notFound()
    {
        view(
            'errors/404', [
                "title" => '404 Not Found'
            ],
        VIEW_PATH_CORE
               );
    }

}