<?php
class Calculadora {
    private $numero1;
    private $numero2;
    private $resultado;

    public function __construct($n1, $n2) {
        // Converte as entradas para float para garantir operações com decimais
        $this->numero1 = (float) $n1;
        $this->numero2 = (float) $n2;
        $this->resultado = 0;
    }

    public function somarNumeros() {
        $this->resultado = $this->numero1 + $this->numero2;
        echo "<p>Resultado da Soma: **{$this->numero1} + {$this->numero2} = {$this->resultado}**</p>";
    }

    public function subtrairNumeros() {
        $this->resultado = $this->numero1 - $this->numero2;
        echo "<p>Resultado da Subtração: **{$this->numero1} - {$this->numero2} = {$this->resultado}**</p>";
    }

    public function multiplicarNumeros() {
        $this->resultado = $this->numero1 * $this->numero2;
        echo "<p>Resultado da Multiplicação: **{$this->numero1} x {$this->numero2} = {$this->resultado}**</p>";
    }

    public function dividirNumeros() {
        // Validação de divisão por zero
        if ($this->numero2 != 0) {
            $this->resultado = $this->numero1 / $this->numero2;
            echo "<p>Resultado da Divisão: **{$this->numero1} ÷ {$this->numero2} = {$this->resultado}**</p>";
        } else {
            echo "<p style='color: red;'>Erro: **Divisão por zero não é permitida.**</p>";
        }
    }
}
?>