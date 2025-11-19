<?php


use core\library\App;

$app = App::create()
    ->withEnvironmentVariables()
    ->withContainer()
    ->withErrorPage();





