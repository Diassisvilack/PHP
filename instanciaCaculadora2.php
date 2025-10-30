<?php
// Inclui o arquivo da classe (deve estar no mesmo diretório)
require_once 'Calculadora.php';

// Variável para armazenar mensagens de erro ou resultado
$resultado_operacao = "";

// 1. Verifica se o formulário foi submetido usando o método POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // 2. Verifica se os campos de número existem no POST
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        
        // 3. Sanitiza as entradas para garantir que são números
        // FILTER_FLAG_ALLOW_FRACTION permite números decimais
        $numero1 = filter_var($_POST['numero1'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $numero2 = filter_var($_POST['numero2'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        // 4. Checa se os valores sanitizados são realmente numéricos
        if (is_numeric($numero1) && is_numeric($numero2)) {
            
            // 5. Instancia a classe Calculadora
            $calcula = new Calculadora($numero1, $numero2);

            // 6. Estrutura if-elseif: verifica QUAL botão de operação foi pressionado.
            // Apenas uma operação será executada.
            if (isset($_POST['btnSoma'])) {
                $calcula->somarNumeros();
            } else if (isset($_POST['btnSubtracao'])) {
                $calcula->subtrairNumeros();
            } else if (isset($_POST['btnMultiplicacao'])) {
                $calcula->multiplicarNumeros();
            } else if (isset($_POST['btnDivisao'])) { 
                $calcula->dividirNumeros();
            }

        } else {
            $resultado_operacao = "<p style='color: red;'>Erro: As entradas devem ser números válidos.</p>";
        }

    } else {
        $resultado_operacao = "<p style='color: orange;'>Erro: Por favor, preencha ambos os números.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <style>
        .resultado {
            margin-top: 20px;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>🔢 Calculadora Simples</h1>
    
    <form method="POST">
        <label for="num1">Número 1:</label>
        <input type="number" step="any" name="numero1" id="num1" required
               value="<?php echo isset($numero1) ? htmlspecialchars($numero1) : ''; ?>"/>
        <br/><br/>
        
        <label for="num2">Número 2:</label>
        <input type="number" step="any" name="numero2" id="num2" required
               value="<?php echo isset($numero2) ? htmlspecialchars($numero2) : ''; ?>"/>
        <br/><br/>
        
        <input type="submit" value="+" name="btnSoma"/>
        <input type="submit" value="-" name="btnSubtracao"/>
        <input type="submit" value="x" name="btnMultiplicao"/>
        <input type="submit" value="÷" name="btnDivisao"/>
    </form>
    
    <div class="resultado">
        <?php 
        // Exibe o resultado da operação (que é ecoado diretamente pela classe) 
        // ou qualquer mensagem de erro
        echo $resultado_operacao; 
        ?>
    </div>
    
</body>
</html>