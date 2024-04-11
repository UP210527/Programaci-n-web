<?php

$host = "localhost";
$dbName = "ToDoApp";
$user = "root";
$password = "240503";
$protocol = "mysql:host={$host};dbname={$dbName}";
try {
  
  $conn = new PDO($protocol, $user, $password);
} catch (PDOException $e) {
  die($e->getMessage());
}