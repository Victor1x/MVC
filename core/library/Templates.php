<?php

namespace core\library;


use core\exception\ClassNotFoundException;
use core\interfaces\TemplateInterface;

class Templates
{
    public static function render
    (
        string $view,
        array  $data = [],
        string $path = VIEW_PATH
    )
    {
        $template = getResolve("templateEngine");
        if (!class_exists($template)) {
            throw  new ClassNotFoundException("Template [ $template::class ] does not exist");
        }

        $template = new $template();

        if (!$template instanceof TemplateInterface) {
            throw new ClassNotFoundException("Template " .'[ '.$template::class.' ]'. " does not implement TemplateInterface");
        }

        return $template->render($view, $data, $path);


    }

}