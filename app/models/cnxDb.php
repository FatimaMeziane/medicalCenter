<?php

function databaseConnection()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=medical_center', 'root', '');
        echo "Connection reussie";
    } catch (PDOException $e) {
        echo "<p>Error: " . $e->getMessage();
        die();
    }
    return $pdo;
}