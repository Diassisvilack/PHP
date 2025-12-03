<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="cadastrarAluno.php">Cadastrar</a></li>
            <li><a href="consultarAluno.php">Consultar</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>CADASTRAR ALUNO</h1>
        
        <?php if(isset($_GET['msg']) && $_GET['msg'] == 'erro'): ?>
            <p style="color: red; font-weight: bold;">Erro ao cadastrar o aluno. Verifique se o e-mail já existe.</p>
        <?php endif; ?>

        <form action="../control/cadastrarAlunoControl.php" method="POST">
        
            <label for="Matrícula">Matrícula:</label>
            <input type="text" id="Matrícula" name="Matrícula" required><br>

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>
            
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone"><br>
            
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco"><br>
            
            <label for="email">E-Mail:</label>
            <input type="email" id="email" name="email">

            <p>Curso Matriculado:</p>
            <label><input type="radio" name="curso" value="Técnico em Informática" required> Técnico em Informática</label><br>
            <label><input type="radio" name="curso" value="Técnico em Logística"> Técnico em Logística</label><br>
            <label><input type="radio" name="curso" value="Técnico em Administração"> Técnico em Administração</label><br>
            
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>