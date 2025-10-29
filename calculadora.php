<?php
Class Calculadora{
public $numero1;
public $numero2;

public function __Construct($numero1,$numero2){
$this->numero1 = $numero1;
$this->numero2 = $numero2;

}

public function somaNumeros(){
    echo nl2br("$this->numero1 + $this->numero2 = ".$this->numero1 + $this->numero2."\n");
}
public function subtracaoNumeros(){
    echo nl2br("$this->numero1 - $this->numero2 = ".$this->numero1 - $this->numero2."\n");
}
public function multiplicacaoNumeros(){
    echo nl2br("$this->numero1 * $this->numero2 = ".$this->numero1 * $this->numero2."\n");
}
public function divisaoNumeros(){
    echo nl2br("$this->numero1 / $this->numero2 = ".$this->numero1 / $this->numero2."\n");
}

}

$calcular = new calculadora(10, 20);
$calcular->numero1 = 100;
$calcular->somaNumeros();
$calcular->subtracaoNumeros();
$calcular->multiplicacaoNumeros();
$calcular->divisaoNumeros();

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
    <h3>Calculadora</h3>
    <form>
        <input type="number" name="numero1" placeholder="Digite o 1º numero"/>
        <input type="number" name="numero2" placeholder="Digite o 2º numero"/>
        <br><br>
        <input type="submit" value="+" name=""/>
        <input type="submit" value="-"name=""/>
        <input type="submit" value="x"name=""/>
        <input type="submit" value="÷"name=""/>
    </form>
    
</body>
</html>