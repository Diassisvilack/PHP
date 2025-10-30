<?php
   
    class Calculadora{
        private $numero1;
        private $numero2;

        public function __construct($numero1 , $numero2){
            $this->numero1 = $numero1;
            $this->numero2 = $numero2;
        }

        public function somarNumeros(){
            $soma = $this->numero1 + $this->numero2;
            return $soma;
        }

        public function subtrairNumeros(){
            $subtracao = $this->numero1 - $this->numero2;
            return $subtracao;
        }

        public function multiplicarNumeros(){
            $multiplicacao = $this->numero1 * $this->numero2;
            return $multiplicacao;
        }

        public function dividirNumeros(){
            $divisao = $this->numero1 / $this->numero2;
            return $divisao;
            
        }

    }
?>