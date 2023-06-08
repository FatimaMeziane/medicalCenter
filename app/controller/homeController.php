<?php

require_once dirname(__FILE__,2) .'/models/cnxDb.php';
// function databaseConnection()
// {
//     try {
//         $pdo = new PDO('mysql:host=localhost;dbname=medical_center', 'root', '');
//         echo "Connection reussie";
//     } catch (PDOException $e) {
//         echo "<p>Error: " . $e->getMessage();
//         die();
//     }
//     return $pdo;
// }

function pageAccueil()
{
    // DatabaseConnection();
    require_once dirname(__FILE__,3) . '/views/home.php';
}