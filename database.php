<?php

$server = 'fdb24.awardspace.net:3306';
$username = '2918174_fullweb';
$password = 'fullwebcolombia2015';
$database = '2918174_fullweb';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
