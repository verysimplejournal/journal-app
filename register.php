<?php
require 'config.php';
/*
require_once 'myfunctions.php';

verificaDati($_POST);
verificaUsername($_POST['username']);
registraUtente($_POST);

echo 'Successo! <a href="https://anatoliyz.playground.verysimplejournal.com">Torna indietro</a>';
*/
require_once 'Utente.php';
$utente = new Utente();
$utente->registrazione($_POST);