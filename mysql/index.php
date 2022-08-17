<?php

$config = require dirname(__DIR__) . '/config/database.php';

try {
  $conn = new PDO(
    'mysql:host=' . $config['host'] . ';dbname=' . $config['database'],
    $config['user'],
    $config['password']
    );
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}