<?php
session_start();
if (empty($_POST['note'])) {
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
    $sql = "insert into notes (text, user_id, created_at)
    values ('".$_POST['note']."',".$_SESSION['user_id'].", CURRENT_TIMESTAMP)";
    $conn->exec($sql);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
  }

  header('Location: index.php?success=true');
  exit;