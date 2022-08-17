<?php
session_start();
if (empty($_POST['note_id'])) {
    header('Location: index.php?error=empty');
    exit;
}

$config = require dirname(__DIR__) . '/config/database.php';

try {
    $conn = new PDO(
      'mysql:host=' . $config['host'] . ';dbname=' . $config['database'],
      $config['user'],
      $config['password']
      );
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "delete from notes where id = '".$_POST['note_id']."';";
    $conn->exec($sql);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
  }

  header('Location: index.php');
  exit;