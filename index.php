<?php 

//gets the connection to the database class
$db = require 'core/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'],'/');

$routes = Router::load('routes.php');

require $routes->direct($uri);

 ?>