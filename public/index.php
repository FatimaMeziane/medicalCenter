<?php
require_once dirname(__FILE__, 2) . '/vendor/autoload.php';
use app\models\Doctor;
use app\models\Users;
use app\Controller\HomeController;
use app\Controller\SecurityController;
$prenom = 'fati';
$nom = 'mez';
$doctor = new Doctor($prenom, $nom);
$user = new Users();

$user->setRole("user")
   
    ->setFirstName("elo")
    ->setLastName("allerg")
    ->setEmail("el@al")
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


//retour a home si la page n'existe pas
$page = $_GET['page'] ?? "home";
$authorized_pages = [
    // ce qu'on reçoit dans le get => notre fonction dans le controller
    "home" => [
        'controller' => 'HomeController',
        'method'=>"pageAccueil"],
    "listRDV" => [
            'controller' => 'HomeController',
            'method'=>"listRDV"],
    "registration" => [
        'controller' => 'securityController',
        'method'=>"registrationAction"
        ],
    "login" => [
        'controller' => 'securityController',
        'method'=>"loginAction"
        ]
        
];


// il cherche si la route existe dans le tableau sinon il nous renvois vers la page d'acc
// $controller = array_key_exists($route, $routes) ? $routes[$route] : "pageError";
if(array_key_exists($page, $authorized_pages)) {
    // je récupère le nom du conroller à instancier
    $controller_name = "app\\Controller\\" . $authorized_pages[$page]['controller'];
    // je récupère la méthode du controller à appeller
    $method_name = $authorized_pages[$page]['method'];
    // j'instancie mon controller
    $controller = new $controller_name();
    // j'appelle la méthode demandée
    $controller->$method_name();
} else {
    $controller = new HomeController();
    $controller->pageError();
}

// on appelle la fonction dans le controller 
// $controller =  new HomeController();
// $controller->pageAccueil();

//pageAccueil();