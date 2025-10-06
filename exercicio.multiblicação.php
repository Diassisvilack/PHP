<?php

//adocao
$produto1 = 40.00;
$produto2 = 30.00;
$total = $produto1 + $produto2;
echo "o total de sua compra e $total<br><br>";

//subtracao
$total = 100.00;
$desconto = 30.00;
$valorfinal = $total - $desconto;
echo " o total de sua compra e $valorfinal<br><br>";

//multiplicacao
$precounitario = 20.00;
$quantidade = 3;
$total = $precounitario * $quantidade;
echo " o tatol de sua compra e $total<br><br>";

//divicao
$total = 100;
$quantidade = 4;
$valor_unit = $total / $quantidade;

echo "o valor e $valor_unit<br><br>";

// if
$comida = true;
if($comida){
    echo " a respota encotrou a comida e comeu<br><br>";
}
$idade = 70;
if($idade > 12){
    echo "voce e uma criança";
} elseif ($idade >= 12 && $idade <18){
    echo " voce e um adolencete";
} elseif (idade >= 18 && $idade < 60){

}else {
    echo " voce e um idoso";
}

$prioridade = "alta";
switch($prioridade){
    case "baixa":
    echo " o chamada sera atendido em 72 horas";
    break;
    case "media";
    echo "o chamado sera atendido";
    break;

    case "atleta":
            echo "o chamado sera atendido imediatamente";
            break;
    default:
        echo "prioridade invalida";

}
?>