<?php
$name = 'Senac Americana - Cursos de TI';  //A função strtoupper ecreve tudo em maisculo
echo strtoupper($name);
echo '<hr>';
echo strtolower($name); // A função srttolower escreve tudo em menusculo
echo '<hr>';
echo ucfirst(strtolower($name)); // a função ucfirst(strtolower($name)) transforma a primera letra em maisculo 
echo '<hr>';
echo ucwords(strtolower($name)); // a função ucwords(strtolower($name)); transforma a primeira letra da cada palavra maiscula
echo '<hr>';
?>