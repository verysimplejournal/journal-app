<?php

$tris=array(
array(1,2,1),
array(2,1,1),
array(2,2,2)
);

if($tris[0][0]+$tris[0][1]+$tris[0][2]==3){
     echo "Vinto X";
} elseif($tris[1][0]+$tris[1][1]+$tris[1][2]==3){
    echo "Vinto X";
} elseif($tris[2][0]+$tris[2][1]+$tris[2][2]==3){
    echo "Vinto X";
} elseif($tris[0][0]+$tris[1][0]+$tris[2][0]==3){
    echo "Vinto X";
} elseif($tris[0][1]+$tris[1][1]+$tris[2][1]==3){
    echo "Vinto X";
} elseif($tris[0][2]+$tris[1][2]+$tris[2][2]==3){
    echo "Vinto X";
} elseif($tris[0][0]+$tris[1][1]+$tris[2][2]==3){
    echo "Vinto X";
} elseif($tris[0][2]+$tris[1][1]+$tris[2][0]==3){
    echo "Vinto X";
} elseif($tris[0][0]+$tris[0][1]+$tris[0][2]==6){
     echo "Vinto O";
}  elseif($tris[1][0]+$tris[1][1]+$tris[1][2]==6){
    echo "Vinto O";
} elseif($tris[2][0]+$tris[2][1]+$tris[2][2]==6){
    echo "Vinto O";
} elseif($tris[0][0]+$tris[1][0]+$tris[2][0]==6){
    echo "Vinto O";
} elseif($tris[0][1]+$tris[1][1]+$tris[2][1]==6){
    echo "Vinto O";
} elseif($tris[0][2]+$tris[1][2]+$tris[2][2]==6){
    echo "Vinto O";
} elseif($tris[0][0]+$tris[1][1]+$tris[2][2]==6){
    echo "Vinto O";
} elseif($tris[0][2]+$tris[1][1]+$tris[2][0]==6){
    echo "Vinto O";
}  else{
    echo "Pari";
}

?>