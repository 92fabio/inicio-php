<?php
$empresa = 'Senac Jaú';
echo "$empresa <br>";
$novaEmpresa = str_replace('Jaú', 'Americana', $empresa); //ele vai subistituir
echo "$novaEmpresa <br>";
echo substr($novaEmpresa, 0, 4) . "<br>"; 
echo strlen($novaEmpresa);              //strlen e a quantidade de caracterias que ela possui
?>