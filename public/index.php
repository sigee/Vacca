<?php
require_once('../vendor/autoload.php');

/* Router */
$router = new \Vacca\Router\Router();
$router->get('/', function () { return 'It works!'; });
$router->get('/about', function () { return 'About'; });
$router->get('/contact', function () { return 'Contact'; });
/* END Router */

$response = $router->handle();

$response->send();
