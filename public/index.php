<?php
require_once dirname(__FILE__, 2) . '/vendor/autoload.php';
require_once dirname(__FILE__, 2) . '/app/controller/homeController.php';
require_once dirname(__FILE__, 2) . '/app/controller/securityController.php';

use app\models\Doctor;
use app\models\Users;

$prenom = 'fati';
$nom = 'mez';
$doctor = new Doctor($prenom, $nom);
$user = new Users();

$user->setRole("user")
   
    ->setFirstName("fat")
    ->setLastName("mez")
    ->setEmail("fat@mez")
    ->setPassword("password")
    ->setAddress("adr")
    ->setCity("vitrolles")
    ->setCivility("dame")
    ->setPostCode("13000")
    ->setCreated_at("2015-10-03")
    ->setUpdated_at("2015-10-03");
    echo"hello";
    print_r($user->create());


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