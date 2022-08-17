
<?php

class Utente {
    // public string $nome;
    // public string $cognome;
    // public string $username;
    // protected string $password;

    public function registrazione($_POST) {
      
            if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['username']) || empty($_POST['password'])) {
                 echo 'Errore <a href="https://anatoliyz.playground.verysimplejournal.com">Torna indietro</a>';
                exit;
             }
        

    }

}

$utente2 = new Utente();
$utente2->login($_POST['username'],$_POST['password']);
