<?php
require_once dirname(__FILE__, 2) . '/vendor/autoload.php';
require_once dirname(__FILE__, 2) . '/app/controller/homeController.php';
require_once dirname(__FILE__, 2) . '/app/controller/enregistrementController.php';

use app\models\Doctor;

$prenom = 'fati';
$nom = 'mez';
$doctor = new Doctor($prenom, $nom);
// var_dump($doctor);
$routes = [
    // ce qu'on reçoit dans le get => notre foncion dans le controller
    "home" => "pageAccueil",
    "registration" => "registrationAction",
    "login" => "loginAction"
];
//retour a home si la page n'existe pas
$route = $_GET['page'] ?? "home";
// il cherche si la route existe dans le tableau sinon il nous renvois vers la page d'acc
$controller = array_key_exists($route, $routes) ? $routes[$route] : "pageAccueil";
// on appelle la fonction dans le controller 
$controller();

//pageAccueil();