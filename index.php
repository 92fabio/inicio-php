<!DOCTYPE html>
<html lang="enpt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História da Programação</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>
      <h4>História da programação</h4>
    <h1>Mulheres que fizeram a diferença</h1>

    <hr>

    <?php
    $arrayMulheres = [
        ['Ada Lovelace','ada-lovelace.webp','Ada Lovelace foi uma matemática britânica do século XIX, reconhecida como a primeira programadora da história. Ao trabalhar com a máquina analítica de Charles Babbage, ela escreveu o primeiro algoritmo destinado a ser processado por uma máquina, antecipando conceitos fundamentais da computação moderna.'],
        ['Dorothy-Vaughan','dorothy-vaughan.png','Dorothy Vaughan foi uma matemática e programadora que trabalhou na NASA, destacando-se como uma das primeiras supervisoras negras. Especialista em computação, dominou linguagens como FORTRAN e liderou equipes durante a transição dos cálculos manuais para os sistemas computacionais.'],
        ['Grace-Hopper','grace-hopper.webp','Grace Hopper foi uma cientista da computação e oficial da Marinha dos EUA que revolucionou a programação. Criou o primeiro compilador e contribuiu para o desenvolvimento do COBOL. Popularizou a ideia de linguagens mais acessíveis, aproximando a programação de pessoas além do meio científico.'],
        ['Margareth-Hamilton','margareth-hamilton.webp','Margaret Hamilton é uma cientista da computação responsável pelo software das missões Apollo da NASA. Seu trabalho foi crucial para o sucesso do pouso na Lua, criando sistemas confiáveis e inovadores. Ela ajudou a consolidar o termo “engenharia de software” como disciplina essencial.'],
        ['Marissa-Mayer1','marissa-mayer1.png','Marissa Mayer é uma engenheira e executiva de tecnologia que ganhou destaque no Google, onde foi uma das primeiras funcionárias. Posteriormente, tornou-se CEO do Yahoo, sendo conhecida por sua atuação em produtos digitais, usabilidade e liderança em grandes empresas do setor tecnológico.'],
    ];
    ?>

       <div class="galeria">
        
        <?php /*cada item é o conjunto de informações de uma mulher*/  ?>
        <div class="item"> 
            <img src="<?php echo $arrayMulheres[0][1];?>">
            <h3><?php echo $arrayMulheres[0][0];?></h3>
            <p><?php echo $arrayMulheres[0][2]; ?></p>
        </div>
         <div class="item">
         <img src="<?php echo $arrayMulheres[1][1];?>">
         <h3><?php echo $arrayMulheres[1][0]; ?></h3>
         <p><?php echo $arrayMulheres[1][2]; ?></p>
        </div>
       
        <div class="item">
         <img src="<?php echo $arrayMulheres[2][1];?>">
         <h3><?php echo $arrayMulheres[2][0]; ?></h3>
         <p><?php echo $arrayMulheres[2][2]; ?></p>
        </div>

        <div class="item">
         <img src="<?php echo $arrayMulheres[3][1];?>">
         <h3><?php echo $arrayMulheres[3][0]; ?></h3>
         <p><?php echo $arrayMulheres[3][2]; ?></p>
        </div>

         <div class="item">
         <img src="<?php echo $arrayMulheres[4][1];?>">
         <h3><?php echo $arrayMulheres[4][0]; ?></h3>
         <p><?php echo $arrayMulheres[4][2]; ?></p>
        </div>
    </div>



</body>
</html>