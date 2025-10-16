<?php
// 1. Definição dos Arrays PHP (Dados para o formulário)
$escolaridades = ['1º Ano', '2º Ano', '3º Ano'];
$disciplinas = ['Português', 'Matemática', 'Biologia', 'Filosofia', 'Física', 'Química'];
$cidades = ['', 'São Paulo', 'Brasília', 'Minas Gerais', 'Rio de Janeiro'];

// 2. Processamento dos Dados do Formulário (Após o envio)
$dados_enviados = false;
$nome_completo = $email = $escolaridade_selecionada = $cidade_selecionada = "";
$disciplinas_selecionadas = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dados_enviados = true;
    
    // Coleta dos dados usando o método POST
    $nome_completo = htmlspecialchars($_POST['nome_completo'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $escolaridade_selecionada = htmlspecialchars($_POST['escolaridade'] ?? '');
    $cidade_selecionada = htmlspecialchars($_POST['cidade'] ?? '');
    
    // Coleta o array de checkboxes. O 'disciplinas' é um array no HTML,
    // então ele é recebido como um array no PHP.
    $disciplinas_selecionadas = $_POST['disciplinas'] ?? [];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário Super Desafio</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { background: white; padding: 30px; border-radius: 8px; max-width: 600px; margin: 0 auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 20px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; color: #333; }
        input[type="text"], input[type="email"], select { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .radio-group, .checkbox-group { border: 1px solid #ddd; padding: 10px; border-radius: 4px; background-color: #f9f9f9; }
        .radio-group label, .checkbox-group label { display: inline-block; font-weight: normal; margin-right: 15px; margin-bottom: 0; }
        .submit-btn { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        .submit-btn:hover { background-color: #0056b3; }
        .resultado { margin-top: 30px; padding: 15px; border: 2px solid #28a745; background-color: #e2f0e9; border-radius: 4px; }
        .resultado h3 { color: #28a745; }
    </style>
</head>
<body>

<div class="container">
    <h1>Super Desafio: Cadastro</h1>
    <hr>

    <form method="POST" action="">
        
        <div class="form-group">
            <label for="nome">Seu Nome Completo:</label>
            <input type="text" id="nome" name="nome_completo" required>
        </div>

        <div class="form-group">
            <label for="email">Seu E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Escolaridade:</label>
            <div class="radio-group">
                <?php foreach ($escolaridades as $valor): ?>
                    <label>
                        <input type="radio" name="escolaridade" value="<?php echo $valor; ?>" required>
                        <?php echo $valor; ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="form-group">
            <label>Disciplinas de Interesse:</label>
            <div class="checkbox-group">
                <?php foreach ($disciplinas as $valor): ?>
                    <label>
                        <input type="checkbox" name="disciplinas[]" value="<?php echo $valor; ?>">
                        <?php echo $valor; ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="form-group">
            <label for="cidade">Selecione sua Cidade:</label>
            <select id="cidade" name="cidade" required>
                <?php foreach ($cidades as $valor): ?>
                    <option value="<?php echo $valor; ?>">
                        <?php echo $valor; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="submit-btn">Enviar Dados</button>
    </form>

    <?php 
    // 3. Exibição dos Resultados (Se o formulário foi enviado)
    if ($dados_enviados): ?>
        <div class="resultado">
            <h3>Dados Recebidos com Sucesso:</h3>
            <p><strong>Nome:</strong> <?php echo $nome_completo; ?></p>
            <p><strong>E-mail:</strong> <?php echo $email; ?></p>
            <p><strong>Escolaridade:</strong> <?php echo $escolaridade_selecionada; ?></p>
            <p><strong>Cidade:</strong> <?php echo $cidade_selecionada; ?></p>
            <p>
                <strong>Disciplinas:</strong> 
                <?php 
                if (!empty($disciplinas_selecionadas)) {
                    // Imprime as disciplinas separadas por vírgula
                    echo implode(", ", $disciplinas_selecionadas);
                } else {
                    echo "Nenhuma disciplina selecionada.";
                }
                ?>
            </p>
        </div>
    <?php endif; ?>

</div>
</body>
</html>