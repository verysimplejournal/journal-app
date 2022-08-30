<?php

class Utente {
    // protected string $nome;
    // public string $cognome;
    // public string $username;
    // protected string $password;
    protected $config;

    public function __construct()
    {
      $this->config = require dirname(__FILE__) . '/config/env.php';
    }

    public function registrazione($dati)
    {
        $this->verificaDati($dati);
        $this->verificaUsername($dati['username']);
        // $fileContents = file_get_contents("registered-users.txt");
        // file_put_contents("registered-users.txt",$fileContents . "\n" . implode(",",$dati));
        $config = require dirname(__FILE__) . '/config/database.php';

        try {
            $conn = new PDO(
              'mysql:host=' . $config['host'] . ';dbname=' . $config['database'],
              $config['user'],
              $config['password']
              );
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "insert into users (firstname, lastname, email, password)
            values ('".$dati['name']."','".$dati['surname']."','".$dati['username']."','".$dati['password']."')";
            $conn->exec($sql);
            header('Location: ' . $this->config['url'] . 'login.php');
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit;
          }
    }

    protected function verificaDati($dati)
    {
        if (empty($dati['name']) || empty($dati['surname']) || empty($dati['username']) || empty($dati['password'])) {
            header('Location: ' . $this->config['url'] . '?error_msg=invalid');
            exit;
        }
    }

    protected function verificaUsername($username){

    $config = require dirname(__FILE__) . '/config/database.php';

    try {
    
        $conn = new PDO(
          'mysql:host=' . $config['host'] . ';dbname=' . $config['database'],
          $config['user'],
          $config['password']
          );
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = '".$username."'");
        $stmt->execute();
        if ($stmt->rowCount()) {
          exit;
        } 
      } catch(PDOException $e) 
      {
        echo "Connection failed: " . $e->getMessage();
        exit;
  
      }
    }
    
 /*   {
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
*/

    public function login($username, $password) {
        // $isRegistered = false;
        // $content = file("registered-users.txt");
        
        // foreach($content as $con){
        //     $arr = explode(',',rtrim($con));
        //     if($arr[2] == $username && $arr[3] == $password) 
        //     {
        //         $isRegistered = true;
        //     }
        // }
    
        // if ($isRegistered == true) {
        //     $_SESSION['islogged'] = true;
        //     header('Location: index.php');
        // }
        $config = require dirname(__FILE__) . '/config/database.php';

        try {
            $conn = new PDO(
              'mysql:host=' . $config['host'] . ';dbname=' . $config['database'],
              $config['user'],
              $config['password']
              );
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT id FROM users WHERE email = '".$username."' AND password = '".$password."'");
            $stmt->execute();
            if ($stmt->rowCount()) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION['islogged'] = true;
                $_SESSION['user_id'] = $user['id'];
                header('Location: ' . $this->config['url']);
            } else {
              header('Location: ' . $this->config['url'] . 'login.php?error_msg=invalid');
            }
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit;
            //eeeeeeeeeee
          }
    }
}

