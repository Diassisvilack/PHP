<?php
$primeironumero = 5;
$segundonumero = 5;
$terceironumero = 10;
$nome1 = "Renata";
$nome2 = "renata";
$nome3 = "Renata";

echo "Resolva o problema a seguir: Utilizando os Operadores de Comparações que foram até aqui Utilizando";
echo nl2br("\n\n\nPrimeiro Numero = $primeironumero");
echo nl2br("\nSegundo Numero = $segundonumero");
echo nl2br("\nTerceiro Numero = $terceironumero");

echo nl2br("\n\n(O Primeiro Nome é diferente do Segundo) E (O Primeiro numero é igual ao Segundo Numero)");

echo ("Resultado = ");
var_dump($nome1 != $nome2) && ($primeironumero == $segundonumero);

echo nl2br("\n(O Primeiro Numero é Igual do segundo Numero) E (O primeiro Nome é diferente do Terceiro Nome)");
echo ("Resultado = ");
var_dump(($primeironumero == $segundonumero) && ($nome1 != $nome3));

echo nl2br("\n(O Primeiro Numero é maior que o segundo Numero) E (O primeiro Numero é menor que o Terceiro Numero)");
echo ("Resultado = ");
var_dump(($primeironumero > $segundonumero) && ($nome1 < $nome3));

echo nl2br("\n(O Primeiro Numero é maior ou Igual ao Terceiro Numero) E (O Terceiro Numero é menor ou igual ao Sugendo Numero)");
echo ("Resultado = ");
var_dump(($primeironumero >= $segundonumero) && ($terceironumero <= $segundonumero));

echo nl2br("\n\n(O Primeiro Nome é diferente do segundo Nome) Ou (O Primeiro Numero é igual ao Segundo Numero)");
echo ("Resultado = ");
var_dump(($nome1 != $nome2) && ($primeironumero == $segundonumero));

echo nl2br("\n(O Primeiro Numero é maior ou Igual ao Terceiro Numero) Ou (O Terceiro Numero é maior ou igual oa Segundo Numero)");
echo ("Resultado = ");
var_dump(($primeironumero >= $terceironumero) && ($terceironumero >= $segundonumero));

?>
