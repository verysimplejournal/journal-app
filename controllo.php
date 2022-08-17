<?php
require 'config.php';
/*  
verificalogin($_POST);
*/

// verificalogin($_POST['username'],$_POST['password']);

require_once 'Utente.php';
$utente = new Utente();
$utente->login($_POST['username'], $_POST['password']);



?>
