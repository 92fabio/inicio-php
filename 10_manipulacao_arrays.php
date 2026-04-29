<?php
$idades = [12, 14, 18, 20, 44, 50, 98, 78, 56]; // criei um array $idades e a função end pucha o último número 

// echo $idades[count($idades)];
//echo end($idades);

$idadesFiltradas = array_filter($idades, function($idade){
    return $idade >=18;
});
var_dump($idadesFiltradas);
?>