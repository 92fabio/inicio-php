<?php
function escrever($texto){
    echo "{$texto} <hr>";
}
//escrever('Eu pedir para minha condição escrever e foi realizado');

function soma($n1, $n2){
    return $n1 + $n2;
}
//echo soma(120, 30);

function conta($n1, $n2, $taxa = 5){
    return ($n1 + $n2) * $taxa;
}
//echo conta(1,2);

function media($n1, $n2, $n3, $n4){
    return ($n1 + $n2 + $n3 + $n4) /8;  
}
      echo media (5, 3, 2, 6);          
?>
