<?php

namespace core\library;


use bootstrap\exception\ViewNotFoundException;
use League\Plates\Engine;

class Templates
{
    public static function render
    (
        string $view,
        array  $data = [],
    )
    {
        if (!file_exists(VIEW_PATH . "/" . $view . ".php")) {
            throw new ViewNotFoundException("View not found: $view");
        }

        $path = VIEW_PATH;
        $templates = new Engine($path);

        echo $templates->render($view, $data);

    }

}