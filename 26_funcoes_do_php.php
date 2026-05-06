<?php
$nome = 'Carlos Ferreira';

if (isset($nome)){
    echo $nome;
}else{
    echo 'Não existe!'; // isset vai validar se existe a variavel com esse comando
}

echo '<br>';

unset($nome);           //unset você excluir a variavel se for excluido tem q refazer
if (isset($nome)){
    echo $nome;
}else{
    echo 'Não exiets!';
}
?>
