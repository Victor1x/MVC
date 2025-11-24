<?php

namespace core\templates;

use core\interfaces\TemplateInterface;

class Twig implements TemplateInterface
{
    public function render(string $view, array $data, string $path = VIEW_PATH)
    {
        // TODO: Implement render() method.
    }
}
