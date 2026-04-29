<?php
$nomes = ['Rubens', 'Senac', 'Americana']; //strtoupper deixa duto em maiuscula
echo '<pre>'; 
var_dump($nomes);
/*
$nomes[0] = strtoupper($nomes[0]);
$nomes[1] = strtoupper($nomes[1]);
$nomes[2] = strtoupper($nomes[2]);
*/
$nomes = array_map('trasnformaParaMaiuscula', $nomes); // FAZ UM MAPEAMENTO E A CADA ELEMENTO ELE FAZ UMA FUNÇÃO

function trasnformaParaMaiuscula($valor)
{
    return strtoupper($valor);
}
var_dump($nomes);
?>
