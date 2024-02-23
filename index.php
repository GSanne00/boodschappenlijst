<?php

include './core/router.php';
include './core/request.php';

$router = new Router;

include 'routes.php';

require Router::load('routes.php')->direct(Request::uri(), Request::method());




?>