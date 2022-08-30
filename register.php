<?php
require 'config.php';
/*
require_once 'myfunctions.php';

verificaDati($_POST);
verificaUsername($_POST['username']);
registraUtente($_POST);

echo 'Successo! <a href="https://anatoliyz.playground.verysimplejournal.com">Torna indietro</a>';
*/
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Utente.php';
$utente = new Utente();
$utente->registrazione($_POST);
echo "La registrazione è venuta con successo";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Journal|Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container">
    <div class="row mt-3">
        <div class="col-8 offset-2 text-center">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="<?php echo $_CONFIG['url']; ?>">Torni indietro</a><br>
                        </li>
                        <li class="list-group-item">
                        <a href="<?php echo $_CONFIG['url']; ?>login.php">Login</a>
                        </li>
                    </ul>
        </div>
    </div>
</div>
<body>