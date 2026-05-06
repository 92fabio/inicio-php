<?php
$estado = 'São Paulo/SP';
$arrayEstado = explode('/', $estado);
echo "<pre>";
var_dump($arrayEstado);           // funcão explode a funcão e divide em etapa ou separa

$info = 'São Paulo/SP/Brasil/Terra'; // função separa em 4 
$arrayInfo = explode('/', $info);
var_dump($arrayInfo);

echo '<hr>';
?>