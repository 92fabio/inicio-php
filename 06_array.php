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
echo $carro_um['cor'];     //
echo ' - ';
echo $carro_um['modelo'];
echo ' - ';
echo $carro_um['marca'];

echo '<br>'; //pula linha 

$carro_dois = [
    'modelo' => 'Punto',
    'marca' => 'Fiat',
    'cor' => 'Amarelo',
];

echo $carro_dois['cor'];
echo ' - ';
echo $carro_dois['modelo'];
echo ' - ';
echo $carro_dois['marca'];

$carro_tres = [
    'modelo' => 'Corsa',
    'marca' => 'Chevrolet',
    'cor' => 'Prata',
];
echo $carro_tres['cor'];
echo ' - ';
echo $carro_tres['modelo'];
echo ' - ';
echo $carro_tres['marca'];

echo '<br>';

// eu crie um array, e coloquei o nome de carro_quatro e inseri valores nele

$carro_quatro = [  
    'modelo' => 'Bravo', // um valor aermazenado na variavel 
    'marca' => 'Fiat',
    'cor' => 'Preto',
];

// eu exibi os valores armazenados no array e tbm inseri textos   

echo 'modelo: ';               // echo exibiu o texto modelo: na tela e com espaço 
echo $carro_quatro['modelo'];  // aqui eu estou exibindo o valor modelo que esta armazenado no arry carro_quatro 

echo '<br>';                        // br pula a linha

echo 'marca: ';                 // echo exibi o valor na tela
echo $carro_quatro['marca'];  // aqui eu estou exibindo o valor modelo que esta armazenado no arry carro_quatro 

echo '<br>';

echo 'cor: ';                   // echo exibi o valor na tela
echo $carro_quatro['cor'];  // aqui eu estou exibindo o valor modelo que esta armazenado no arry carro_quatro 

echo '<br>';
?>

