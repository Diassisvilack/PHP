<?php
// tipo de Dados escalares
$inteiro = 42;
$decimal = 3.14;
$texto = "gurra dos mundos";
$boleano = true;

echo "<br>tipo inteiro";
var_dump ($inteiro);

echo "tipo float:";
var_dump ($decimal);

echo "tipo string:";
var_dump ($texto);

echo "tipo bolean:";
var_dump($boleano);

// tipo composto

$arrayNumerico = [10,20,30];
$arrayAssociativo = [

      "nome" => "Carlos",
      "idade" => 35,
      "casado" => true 
];

  echo "array numerico:";
  var_dump($arrayNumerico);

  echo "array associativo:";
  var_dump($arrayAssociativo);

  //objeto ( classe +  instancia)
  class pessoa{
    public $nome;
    public $idade;

    public function apresentar() {
        return "ola, eu sou {$this->nome},
        tenho {$this->idade} anos.";
    }

   
  }
  $pessoa = new pessoa();
  $pessoa->nome = "Ana";
  $pessoa->idade = 25;

  echo "objeto pessoa:";
  var_dump($pessoa);
  echo $pessoa->apresentar();

?>