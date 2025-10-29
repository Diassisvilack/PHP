?<?php

include_once 'calculadora.php';
$calcular = new calculadora(10, 20);
$calcular->numero1 = 100;
$calcular->somaNumeros();
$calcular->subtracaoNumeros();
$calcular->multiplicacaoNumeros();
$calcular->divisaoNumeros();

?>