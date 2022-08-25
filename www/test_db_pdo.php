<?php

$DBuser = 'root';
$DBpass = $_ENV['MYSQL_ROOT_PASSWORD'];
$pdo = null;

try{
    $database = 'mysql:host=database:3306';
    $pdo = new PDO($database, $DBuser, $DBpass);
    echo "Success: A proper connection to the insights Database was made! All is good.";    
} catch(PDOException $e) {
    echo "Error: Unable to connect to the insights Database. Error:\n $e";
}

$pdo = null;