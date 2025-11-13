<?php

require_once __DIR__ . '/../core/helpers/constants.php';

require_once __DIR__ . '/../core/helpers/functions.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();
