<?php

$content = file("registered-users.txt");


foreach($content as $con){
    $arr = explode(',',$con);
    // var_dump($arr); echo '<br>';
    echo $arr[2] . "<br>";
}