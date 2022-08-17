<?php

/*
 * Viene controllato se sono presenti tutti i dati dell'utente
 * @param array $dati
 
function verificaDati($dati)
{
    if (empty($dati['name']) || empty($dati['surname']) || empty($dati['username']) || empty($dati['password'])) {
        echo 'Errore <a href="https://anatoliyz.playground.verysimplejournal.com">Torna indietro</a>';
        exit;
    }
}

function verificaForm($n, $s, $u, $p)
{
    if (empty($n)) {
        echo 'Errore, manca nome<a href="https://anatoliyz.playground.verysimplejournal.com">Torna indietro</a>' . PHP_EOL;
        exit;
    }
    if (empty($s)) {
        echo 'Errore, manca cognome <a href="https://anatoliyz.playground.verysimplejournal.com">Torna indietro</a>'. PHP_EOL;
        exit;
    }
    if (empty($u)) {
        echo 'Errore, manca username <a href="https://anatoliyz.playground.verysimplejournal.com">Torna indietro</a>'. PHP_EOL;
        exit;
    }
    if (empty($p)) {
        echo 'Errore, manca password <a href="https://anatoliyz.playground.verysimplejournal.com">Torna indietro</a>'. PHP_EOL;
        exit;
    }
}

function verificaUsername($username)
{
    $isRegistered = false;
    $content = file("registered-users.txt");
    
    foreach($content as $con){
        $arr = explode(',',$con);
        if($arr[2] == $username) {
            $isRegistered = true;
        }
    }
    
    if ($isRegistered == true) {
        echo 'Errore username presente! <a href="https://anatoliyz.playground.verysimplejournal.com">Torna indietro</a>';
        exit;
    }
}

function registraUtente($dati)
{
    $fileContents = file_get_contents("registered-users.txt");
    file_put_contents("registered-users.txt",$fileContents . "\n" . implode(",",$dati));
}

function eee(){
    echo "ciao";
}

function generica($var) {
    if (!is_array($var)) {
        echo 'error' . PHP_EOL;
        return;
    }
    var_dump ($var); echo PHP_EOL;
}
*/