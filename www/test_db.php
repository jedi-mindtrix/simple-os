<?php
$link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);

if (!$link) {
    echo "Error: Unable to connect to the insights Database." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to the insights Database was made! All is good." . PHP_EOL;

mysqli_close($link);
