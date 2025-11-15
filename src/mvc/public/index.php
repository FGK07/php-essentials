<?php 
// $path = "/index";
// if (isset($_SERVER['PATH_INFO'])) {
//     $path = $_SERVER['PATH_INFO'];
// }
// simple routing
// DIR to access the current directory
// require __DIR__ . "/../app/View" . $path . ".php";

require_once __DIR__ . '/../vendor/autoload.php';

use EghaKuncoro\PhpMvc\App\Router;
use EghaKuncoro\PhpMvc\Controller\HomeController;


Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/login', 'UserController', 'login');
Router::add('GET', '/about', HomeController::class, 'about');

Router::run();