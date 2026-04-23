<?php
//$carros = ['Uno', 'Gol', 'Fusion', 'Civic'];  EX: em vez de numeros dar nomes a indice 
//echo $carros[1];
//echo '<br>';
//echo $carros[2];
//$carroUm = ['Uno', 'Fiat', 'Branco'];          EX: sempre comece a conta do '0'
//echo $carroUm[2];
$carro_um = [
    'modelo' => 'Uno',
    'marca' => 'Fiat',
    'cor' => 'Branco',
];
echo $carro_um['cor'];
echo $carro_um['modelo'];
echo $carro_um['marca'];
?>