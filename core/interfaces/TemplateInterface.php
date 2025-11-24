<?php

namespace core\interfaces;

interface TemplateInterface
{
public function render(string $view,  array $data, string $path = VIEW_PATH);
}