<?php
session_start();

$config = require dirname(__DIR__) . '/config/database.php';

try {
    $conn = new PDO(
      'mysql:host=' . $config['host'] . ';dbname=' . $config['database'],
      $config['user'],
      $config['password']
      );
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from notes where id = '".$_GET['id']."';";
    $result = $conn->query($sql);
    $note = $result->fetch(PDO::FETCH_ASSOC);
  } catch(PDOException $e) {
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

<div class="container mt-3">
    <?php
    if ($_GET['success'] == 'true') {
    ?>
    <div class="alert alert-success">
        <strong>Success!</strong> Nota salvata.
    </div>
    <?php
    }
    ?>
        <?php
    if ($_GET['error'] == 'empty') {
    ?>
      <div class="alert alert-danger">
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
      <form action="update_note.php" method="post">
    <div class="mb-3 mt-3">
      <label for="note">Note:</label>
      <textarea class="form-control" rows="5" id="note" name="note"><?php echo $note['text']; ?></textarea>
      <input type="hidden" name="note_id" value="<?php echo $_GET['id']; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a class="btn btn-info" href="https://anatoliyz.playground.verysimplejournal.com/journal">Go back</a>
  </form>
      </div>
      </div>

  
</div>

</body>
</html>
