<?php
// Creer une variable pour stocker les differents routes
$currentUrl = $_SERVER['REQUEST_URI'];
$path = parse_url($currentUrl, PHP_URL_PATH);
$decodedPath = urldecode($path);
$paths = explode('/', $decodedPath);
$paths = array_slice($paths, 2);

switch($paths[0]) {
  case 'login':
    require(dirname(__DIR__)."../../views/public/login.php");
    break;
  default:
    require(dirname(__DIR__)."../../views/public/home.php");
    break;
 
}

//require(dirname(__DIR__)."../../views/public/home.php");
?>