<?php

echo nl2br("Desenvolva a atividade a seguir: os seis dados (valores) logo abaixo, portanto valores dinâmicos\n\n"); // Adicionado \n\n para melhor formatação

$primeiroNome = "Ana Paula"; // Boas práticas de nomenclatura de variáveis (camelCase)
$segundoNome = "Ana Luiza Moura";
$terceiroNome = "José Carlos";
$primeiroNumero = 80;
$segundoNumero = 80;
$terceiroNumero = 150.15;

echo nl2br("Primeiro nome = " . $primeiroNome . "\n"); // Usando concatenação para clareza
echo nl2br("Segundo nome = " . $segundoNome . "\n");
echo nl2br("Terceiro nome = " . $terceiroNome . "\n\n");

echo nl2br("Primeiro numero = " . $primeiroNumero . "\n");
echo nl2br("Segundo numero = " . $segundoNumero . "\n");
echo nl2br("Terceiro numero = " . $terceiroNumero . "\n\n");

echo nl2br("O valor da variável primeiro Nome é: " . $primeiroNome . "\n");
echo nl2br("O valor da variável Terceiro Nome é: " . $terceiroNome . "\n");
echo nl2br("Ana Paula e José Carlos são casados e possuem uma filha: " . $segundoNome . "\n");

// Cálculo anual da bolsa
$bolsaAnual = $terceiroNumero * 12;
echo nl2br("Ana Luiza Moura é estudante e ganhou uma bolsa de: R$ " . number_format($terceiroNumero, 2, ',', '.') . " por mês, equivalente a R$ " . number_format($bolsaAnual, 2, ',', '.') . " anual.\n\n"); // Formatando a saída para moeda

// Contagem de caracteres e último sobrenome
$nomeCompletoAnaLuiza = $segundoNome; // Usando uma variável intermediária para clareza
$partesNome = explode(" ", $nomeCompletoAnaLuiza); // Dividindo o nome em partes
$ultimoSobrenome = end($partesNome); // Pegando o último elemento (sobrenome)
$quantidadeCaracteres = strlen($nomeCompletoAnaLuiza);
echo nl2br("O nome \"Ana Luiza Moura\" possui " . $quantidadeCaracteres . " caracteres e o último sobrenome é: " . $ultimoSobrenome . "\n");

// Pós-incremento na variável 'primeiroNumero'
$segundoNumero = $primeiroNumero++; // Correção: O pós-incremento ocorre na variável em si, e o valor atribuído é o 

echo nl2br("\nEncrementando uma unidade (Pós-Incremento) à variável 'primeiroNumero'. O valor original foi atribuído a 'segundoNumero': " . $segundoNumero . "\n");
echo nl2br("Novo valor da variável 'primeiroNumero' é: " . $primeiroNumero . "\n"); $primeiroNumero

?>