<?php
$carrinho = [
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => ' Arroz',
    3 => 'Batata'
];

echo '<pre>';

arsort($carrinho);  //  arsort = ordem decresnete 
var_dump($carrinho);

echo '<hr>';

asort($carrinho);  // asort = orde crecente
var_dump($carrinho);

echo '<hr>';

sort($carrinho);       // sort = organiza as posiçao ou em ordem crescente
var_dump($carrinho);

?>