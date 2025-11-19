<?php


use core\library\App;

require_once __DIR__ . '/../core/helpers/constants.php';

require_once __DIR__ . '/../core/helpers/functions.php';

$app = App::create()
    ->withEnvironmentVariables()
    ->withContainer()
    ->withErrorPage();





