<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/setup.php';

use Zapit\Controllers;
use Zapit\Router;

/** Load .env variables in development environment **/
//$dotenv = new Dotenv\Dotenv(__DIR__ . '/../app/');
//$dotenv->load();

$router = new Router\Router();

/******** GET ********/
//Public
$router->get('/', 'MainController', 'index');
$router->get('/about', 'MainController', 'about');
$router->get('/generate-qr-code', 'MainController', 'generate_qr_code');
//$router->get('/?id=[-\w\d\]+&eid=[-\w\d\]+', 'MainController', 'index');
$router->get('/test', 'MainController', 'test');
$router->get('/showWidget', 'MainController', 'showWidget');
//$router->get('/professor/[-\w\d\?\!\.]+', 'MainController', 'professor');

//Admin
//$router->get('/admin/dashboard', 'AdminController', 'dashboard');
//$router->get('/admin/dashboard/reviewComments', 'AdminController', 'reviewComments');
//$router->get('/admin/login', 'AdminController', 'login');
//$router->get('/admin/logout', 'AdminController', 'logout');


/******** POST ********/
//Public

//Admin
//$router->post('/admin/login', 'AdminController', 'postLogin');
//$router->post('/admin/postReviewComments', 'AdminController', 'postReviewComments');




//See inside $router
//echo "<pre>";
//print_r($router);

$router->submit();

