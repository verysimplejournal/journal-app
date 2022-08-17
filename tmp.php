<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// include 'myfunctions.php';
// $arr = ['name' => '1', 'surname' => '2', 'username' => '3', 'password' => 'pass'];

// $nome = $arr['name'];
// $surname1 = $arr['surname'];
// $username1 = $arr['username'];
// $password1 = $arr['password'];


// verificaForm($nome, $surname1, $username1, $password1);

function quadrato(&$num) {
    $num = $num * $num;
    return $num;
}

$numero = 2;
$abc = 4;
quadrato($abc);


echo $numero . PHP_EOL;
echo $abc . PHP_EOL;