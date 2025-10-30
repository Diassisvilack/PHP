?<?php

require_once 'Calculadora.php';
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(!empty ($_POST ['numero']) && !empty($_POST['numero'])){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $calcula = new Calculadora($numero1 , $numero2);
        if(!empty($_POST['btnSoma'])){
            $calcula->somarNumeros();
        }else{
            if (isset($_POST['btnSoma'])) {
                $calcula->somarNumeros();
            } else if (isset($_POST['btnSubtracao'])) {
                $calcula->subtrairNumeros();
            } else if (isset($_POST['btnMultiplicacao'])) {
                $calcula->multiplicarNumeros();
            } else if (isset($_POST['btnDivisao'])) { 
                $calcula->dividirNumeros();
            }

$calcular = new calculadora($numero1 , $numero2);
$calcular->numero1 = 100;
$calcular->somarNumeros();
$calcular->subtrairNumeros();
$calcular->multiplicarNumeros();
$calcular->dividirNumeros();
    }
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>calculadora</h1>
    <form>
        <input type="number" name="numero1"/>
        <br/><br/>
        <input type="number" name="numero2"/>
        <br/><br/>
        <input type="submit" value="+" name"btnSoma"/>
        <input type="submit" value="-" name"btnSubtracao"/>
        <input type="submit" value="x" name"btnMultiplicao"/>
        <input type="submit" value="÷" name"btnDividisao"/>
    </form>
    
</body>
</html>



<?php
    require_once 'Calculadora.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $calcula = new Calculadora($numero1 , $numero2);
        if(!empty($_POST['btnSomar'])){
           
            $soma = $calcula->somarNumeros();
            echo "$numero1 + $numero2 = ".$soma;
        }
        if(!empty($_POST['btnSubtracao'])){
            
            $subtracao = $calcula->subtrairNumeros();
            echo "$numero1 - $numero2 = ".$subtracao;
        }
        if(!empty($_POST['btnMultiplicar'])){
            
            //$calcula->numero1 = 100;
            $multiplicacao = $calcula->multiplicarNumeros();
            echo "$numero1 X $numero2 = ".$multiplicacao;
        }
        if(!empty($_POST['btnDividir'])){
            
            $divisao = $calcula->dividirNumeros();
            echo "$numero1 ÷ $numero2 = ".$divisao;
        }
    }
    

?>