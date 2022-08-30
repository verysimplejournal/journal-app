<?php
session_start();
require dirname(__DIR__) . '/config.php';
$config = require dirname(__DIR__) . '/config/database.php';

try {
  $conn = new PDO(
    'mysql:host=' . $config['host'] . ';dbname=' . $config['database'],
    $config['user'],
    $config['password']
  );
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "select * from notes where user_id = '" . $_SESSION['user_id'] . "';";
  $result = $conn->query($sql);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Journal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php require dirname(__DIR__) . '/menu-nav.php'; ?>
  <div class="container mt-4">
    <?php
    if ($_GET['success'] == 'true') {
    ?>
      <div class="alert alert-success col-8 offset-2">
        <strong>Success!</strong> Nota salvata.
      </div>
    <?php
    }
    ?>
    <?php
    if ($_GET['error'] == 'empty') {
    ?>
      <div class="alert alert-danger col-8 offset-2">
        <strong>Errore!</strong> nota vuota</a>.
      </div>
    <?php
    }
    ?>


    <div class="row mt-4">
      <div class="col-8 offset-2 text-center">
        <span class="display-2">
          Journal
        </span>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-8 offset-2">
        <form action="save_note.php" method="post">
          <div class="mb-3">
            <label for="note">Write something:</label>
            <textarea class="form-control" rows="5" id="note" name="note"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <div class="mt-3">
          <ul class="list-group">
            <?php
            while ($note = $result->fetch(PDO::FETCH_ASSOC)) {
              echo '<li class="list-group-item d-flex justify-content-between align-items-center">
            ' . $note['text'] . '
            <div class="btn-group">
            <a class="btn btn-info" href="detail_note.php?id=' . $note['id'] . '">Edit</a>
            <form action="delete_note.php" method="post">
            <input type="hidden" name="note_id" value="' . $note['id'] . '">
            <button class="btn btn-danger">Delete</button>
            </form></div>
            </li>';
            }
            ?>

          </ul>
        </div>
      </div>
    </div>


  </div>

</body>

</html>