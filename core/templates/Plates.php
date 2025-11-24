<?php

namespace core\templates;

use core\interfaces\TemplateInterface;
use League\Plates\Engine;

class Plates implements TemplateInterface
{
    public function render(
        string $view,
        array  $data = [],
        string $viewPath = VIEW_PATH
    )
    {
        $template = new Engine($viewPath);
        echo $template->render($view, $data);
    }

}