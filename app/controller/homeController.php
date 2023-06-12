<?php
namespace app\Controller;
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
class HomeController{
    
    
    function pageAccueil()
    {
        // DatabaseConnection();
        require_once dirname(__FILE__,3) . '/views/home.php';
    }
    function listRDV(){
        // $config = parse_ini_file(dirname(__FIle__,3) . 'config.php');
        // dd($config);
        // try {
        //     $db_host = "localhost";
        //     $db_port = "3306";
        //     $db_dbname="medical_center";
        //     $db_user = "root";
        //     $db_pass="";
        //     $dbh = new \PDO("mysql:host=$db_host;port=$db_port;dbname=$db_dbname", $db_user, $db_pass,array(
        //         \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        //     ));
        //     //$p->exec('SET NAMES utf8');
        // } catch (\PDOException $e) {
        //     print "Error!: " . $e->getMessage() . "<br/>";
        //     die();
        // }
        require_once dirname(__FILE__,3) . '/views/appointements/list_appointements.php';
    }
    function pageError()
    {
        require_once dirname(__FILE__,3) . '/views/_partials/_error.php';
     //appel une view error    
    }
}