<?php
$ano = 1980;
$ano_atual = date("Y");
$nome = 'JOE';
$peso = 100;
$numero = true;
$anopassados = $ano_atual - $ano ;
$peso_atual = ($anopassados * 3) + $peso  ;
const país = 'índia';
// Frase sobre o elefante Joe
$frase = "O ano era 1980 quando o elefante Joe,  que pesava 100kg, foi o 1º elefante a ser aprisionado e levado para a Índia.<br><be>.";
$frase1 = "se passaram $anopassados  anos e o peso atual de joe é: $peso_atual";

echo $frase;
echo $frase1;

?>