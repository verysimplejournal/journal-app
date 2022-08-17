<?php

$tris=array(
array("X","X","X"),
array("O","O","X"),
array("X","X","O")
);

if($tris[0][0]=="X" AND $tris[0][1]=="X" AND $tris[0][2]=="X"){
    echo "Vinto X";
} elseif($tris[1][0]=="X" AND $tris[1][1]=="X" AND $tris[1][2]=="X"){
    echo "Vinto X";
} elseif($tris[2][0]=="X" AND $tris[2][1]=="X" AND $tris[2][2]=="X"){
    echo "Vinto X";
} elseif($tris[0][0]=="X" AND $tris[1][0]=="X" AND $tris[2][0]=="X"){
    echo "Vinto X";
} elseif($tris[0][1]=="X" AND $tris[1][1]=="X" AND $tris[2][1]=="X"){
    echo "Vinto X";
} elseif($tris[0][2]=="X" AND $tris[1][2]=="X" AND $tris[2][2]=="X"){
    echo "Vinto X";
} elseif($tris[0][0]=="X" AND $tris[1][1]=="X" AND $tris[2][2]=="X"){
    echo "Vinto X";
} elseif($tris[0][2]=="X" AND $tris[1][1]=="X" AND $tris[2][0]=="X"){
    echo "Vinto X";
} elseif($tris[0][0]=="O" AND $tris[0][1]=="O" AND $tris[0][2]=="O"){
    echo "Vinto O";
} elseif($tris[1][0]=="O" AND $tris[1][1]=="O" AND $tris[1][2]=="O"){
    echo "Vinto O";
} elseif($tris[2][0]=="O" AND $tris[2][1]=="O" AND $tris[2][2]=="O"){
    echo "Vinto O";
} elseif($tris[0][0]=="O" AND $tris[1][0]=="O" AND $tris[2][0]=="O"){
    echo "Vinto O";
} elseif($tris[0][1]=="O" AND $tris[1][1]=="O" AND $tris[2][1]=="O"){
    echo "Vinto O";
} elseif($tris[0][2]=="O" AND $tris[1][2]=="O" AND $tris[2][2]=="O"){
    echo "Vinto O";
} elseif($tris[0][0]=="O" AND $tris[1][1]=="O" AND $tris[2][2]=="O"){
    echo "Vinto O";
} elseif($tris[0][2]=="O" AND $tris[1][1]=="O" AND $tris[2][0]=="O"){
    echo "Vinto O";
}  else{
        echo "Pari";
    }

?>