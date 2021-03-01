<?php

$pdo = null;

$db         = 'mysql';
$host       = 'localhost';
$db_name    = 'exemplo';
$user       = 'root';
$password   = '';

try {
    $pdo = new PDO($db.':host='. $host . ';dbname=' . $db_name, $user, $password);
} catch (Exception $e) {
    echo $e->getMessage();
}

return $pdo;