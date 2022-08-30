<?php
session_start();
require dirname(__DIR__) . '/config.php';

unset($_SESSION['giocatore']);
unset($_SESSION['gioco_iniziato']);
unset($_SESSION['positioni']);

header('Location: '.$_CONFIG['url'].'tris/');