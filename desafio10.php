<?php

echo nl2br("Desenvolva a atividade a seguir: os seis dados (valores) logo abaixo, portanto valores dinâmicos");

$Primeironome = "Ana Paula";
$Segundonome = "Ana Luiza Moura";
$Terceironome = "José Carlos";
$Primeironumero = 80;
$Segundonumero = 80;
$Terceironumero = 150.15;

echo nl2br("\n\nPrimeiro nome = $Primeironome");
echo nl2br("\nSegundo nome = $Segundonome");
echo nl2br("\nTerceiro nome = $Terceironome");

echo nl2br("\n\nPrimeiro numero = $Primeironumero");
echo nl2br("\nSegundo numero = $Segundonumero");
echo nl2br("\nTerceiro numero = $Terceironumero");

echo nl2br("\n\nO valor da variável primeiro Nome é: $Primeironome");
echo nl2br("\nO valor da variável Terceiro Nome é: $Terceironome");
echo nl2br("\nAna Paula e José Carlos são casados e possuem uma filha: $Segundonome");
echo nl2br("\nAna Luiza Moura é estudante e ganhou uma bolsa de: " . $Terceironumero . " por mês equivalente à: R$ " . $Terceironumero * 12 ." Anual");


echo nl2br("\n\nO nome da Ana Luiza Moura possui 15 carecters o último sobrenome é: $ultimosobrenome");
echo nl2br("\nencrementando uma uniodade (Pós Icremento) à variável Primeiro Numero :.$Primeronumero" );
echo nl2br("\nNovo valor da variável Primerio numero é:.$Primeironumero = $Segundonumero");

?>