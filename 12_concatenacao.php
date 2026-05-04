<?php
$var1 = 'Fabio';
$var2 = 'Furtado';

 //echo $var1 . ' ' . $var2 . ' ' . $var3 . ' '  // essa variavel junta as infomaçãoes

 $var3 = $var1 .' ' . $var2 . ' ' . ' ' . 32; 
// echo $var3; todas as infomaçãoes vai esta dentro da variavel $var3;

$nome = 'Rubens Pereira';
$empresa = 'Senac Americana';

//echo 'O ' .$nome. ' é fundador da Empresa: ' .$empresa; exmplo 1
//echo '<br>';
//echo 'Fabio e ' .$nome. ' iniciou o curso de informática: ' .$empresa; exemplo 2

echo "O {$nome} é fundador da empresa: {$empresa}";

?>

