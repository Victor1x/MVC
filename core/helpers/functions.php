<?php

use core\library\Container;
use core\library\Templates;



function view (string $view, array $data = [], string $path = VIEW_PATH)
{

    return Templates::render($view, $data, $path);
};


function setBind(string $key, mixed $value): void
{
    Container::setBind($key, $value);
}

function getResolve(string $key): string |null
{
   return Container::getResolve($key);
}