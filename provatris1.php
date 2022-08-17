<?php

$a1=1; $a2=2; $a3=2;
$b1=2; $b2=2; $b3=2;
$c1=1; $c2=1; $c3=2;

if($a1+$a2+$a3==3){
    echo "Vinto X";
} elseif($b1+$b2+$b3==3){
    echo "Vinto X";
} elseif($b1+$b2+$b3==3) {
    echo "Vinto X";
} elseif($c1+$c2+$c3==3) {
    echo "Vinto X";
} elseif($a1+$b1+$c2==3) {
    echo "Vinto X";
} elseif($a2+$b2+$c2==3) {
    echo "Vinto X";
} elseif($a3+$b3+$c3==3) {
    echo "Vinto X";
} elseif($a1+$b2+$c3==3) {
    echo "Vinto X";
} elseif($a3+$b2+$c1==3) {
    echo "Vinto X";
} elseif($a1+$a2+$a3==6) {
    echo "Vinto O";
} elseif($b1+$b2+$b3==6) {
    echo "Vinto O";
} elseif($b1+$b2+$b3==6) {
    echo "Vinto O";
} elseif($c1+$c2+$c3==6) {
    echo "Vinto O";
} elseif($a1+$b1+$c2==6) {
    echo "Vinto O";
} elseif($a2+$b2+$c2==6) {
    echo "Vinto O";
} elseif($a3+$b3+$c3==6) {
    echo "Vinto O";
} elseif($a1+$b2+$c3==6) {
    echo "Vinto O";
} elseif($a3+$b2+$c1==6) {
    echo "Vinto O";
} else{
    echo "Pari";
}




?>