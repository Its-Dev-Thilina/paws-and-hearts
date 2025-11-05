<?php

session_start();

include_once __DIR__.'/../config.php';
include_once BASE_PATH.'/core/helpers.php';

include_once BASE_PATH.'layout/header.php';

$request = trim($_SERVER['REQUEST_URI'], '/');
$request = parse_url($request, PHP_URL_PATH);

if(key_exists($request, $routes)) {
    [$controller, $method] = $routes[$request];
    set_controller_method($controller, $method);
} else {
    include_once BASE_PATH.'views/errors/page_404.php';
    http_response_code(404);
    exit;
}

include_once BASE_PATH.'layout/footer.php';