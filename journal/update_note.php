<?php
session_start();
if (empty($_POST['note'])||empty($_POST['note_id'])) {
    header('Location: detail_note.php?error=empty');
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
    $sql = "update notes set text = '".$_POST['note']."' where id = '".$_POST['note_id']."'";
    $conn->exec($sql);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
  }

  header('Location: index.php?success=true');
  exit;