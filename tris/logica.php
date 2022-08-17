<?php


$posizioni = [
    0 => [0,1,2],
    1 => [0,1,2],
    2 => [0,1,2]
];

if ($_POST['inizia'] == '1') {
    $_SESSION['gioco_iniziato'] = true;
    $_SESSION['giocatore'] = 'X';
}

if (!empty($_POST['posizione']) && empty($_SESSION['positioni'][$_POST['posizione']])) {
    $_SESSION['positioni'][$_POST['posizione'][0]][$_POST['posizione'][1]] = $_POST['giocatore'];
    $_SESSION['giocatore'] = $_SESSION['giocatore'] == 'X' ? 'O' : 'X';
} else {
    $message = 'Mossa non valida';
}

function controlla($tris) {
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
            return false;
    }
    return true;
}
