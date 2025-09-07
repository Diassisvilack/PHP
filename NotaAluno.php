<?php

$nome = "Aluno";
$nota1 = 5.0;
$nota2 = 9.5;
$media = ($nota1+$nota2)/2;

if($media>=7){

    $status = "Aluno Aprovado";
} else{

   $status = "Aluno reprovado";

    }

    
   
    echo "<br>".$status;

