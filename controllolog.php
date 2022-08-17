<?php

/*
function verificalogin($dati)
{
    $isRegistered = false;
    $content = file("registered-users.txt");
    
    foreach($content as $con){
        $arr = explode(',',$con);
        if($arr[2] == $dati["username"] && $arr[3] == $dati["password"]) 
        {
            $isRegistered = true;
        }
    }

    if ($isRegistered == true) {
        echo 'Benvenuto!';
    }

}

*/
function verificalogin($a,$b)
{
    $isRegistered = false;
    $content = file("registered-users.txt");
    
    foreach($content as $con){
        $arr = explode(',',rtrim($con));
        if($arr[2] == $a && $arr[3] == $b) 
        {
            $isRegistered = true;
        }
    }

    if ($isRegistered == true) {
        echo 'Benvenuto!';
    }

}

?>
