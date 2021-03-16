<?php

$server= "127.0.0.1";
$dbName= "centreculturel";
$userName= "root";
$password= "";

// Connect to DB
$pdo = new PDO("mysql:host=".$server."; dbname=".$dbName, $userName, $password);
$pdo->exec('SET NAMES utf8');
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $pdo;