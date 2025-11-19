<?php

use core\library\Templates;

/**
 * @throws \core\exception\ViewNotFoundException
 */

function view (string $view, array $data = [], string $path = VIEW_PATH)
{

    return Templates::render($view, $data, $path);
};
