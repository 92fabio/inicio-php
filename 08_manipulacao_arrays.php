<?php
$carrinho = ['Arroz', 'Sabão', 'Feijão', 'Balinhas']; // separa cada texto por variavel
var_dump($carrinho);

echo '<hr>';

array_pop($carrinho);   // array_pop remove o ultimo elemento de um array
var_dump($carrinho);

echo '<hr>'; 
           
array_shift($carrinho); // array_shift remove o primeiro elemento de uma array
var_dump($carrinho);

echo '<hr>';

unset($carrinho[0]); // remove da memoria uma variavle ou elemento de array (excluir)
var_dump($carrinho);

echo '<hr>';

array_push($carrinho, 'Tapete'); // o array_push adiciona elemnetos no array
array_push($carrinho, 'Rodo');
var_dump($carrinho);

echo '<hr>';

array_unshift($carrinho, 'Microondas'); // array_unshift ele antecipa e fica em primeiro ou add em 1 lugar. 
array_unshift($carrinho, 'Tapete');
var_dump($carrinho);

echo '<hr>';

$carrinho = array_unique($carrinho); // array_unique remove os valores duplicado
var_dump($carrinho);
?>