<?php
$infoEmpresa = [         // aqui criei um array chamado infoEmpresa
    'nome' => ' Senac Amreicana',
    'funcionario' => 'Paulo Santos',
    'anoAtual' => 2026,
];

$infoCurso = [                     // eu creie um array chamado infoCurso
    'curso' => ['PHP', 'JS', 'Vue JS', 'Laravel' ],
    'totalCursos' => 26,
];

echo ('<pre>');  

//comando <pre> e pre formatado fica mais facil de ver 
// var_dump mostra o conteudo  ou estrutura do array
// Arrays, array Keys mostra as chaves do array. 

                        
//var_dump(array_keys($infoEmpresa));   
// var_dump(array_values($infoEmpresa));  // array_valeus mostra os valores  do array 
//var_dump(count($infoEmpresa));  // count conta os valores do arrayinfoEmpresa
$infoEmpresa = array_merge($infoEmpresa,$infoCurso);
print_r($infoEmpresa);             // array_merge junta os array infoEmpresa                                        
?>