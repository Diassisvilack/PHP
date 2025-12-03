<?php

require_once '../control/consultarAlunoControl.php'; 

if (!isset($aluno) || $aluno === null) {
    header("Location: consultarAluno.php?msg=erro_aluno_nao_encontrado");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Aluno</title>
    </head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="cadastrarAluno.php">Cadastrar</a></li>
            <li><a href="consultarAluno.php">Consultar</a></li>
        </ul>
    </nav>
    <header>
        <h1>Alterar Aluno</h1>
    </header>

    <form method="POST" action="../control/alterarAlunoControl.php">
        
        <input type="hidden" name="matricula" value="<?= htmlspecialchars($aluno->matricula) ?>" />
        
        <label>Nome do Aluno: </label>     
        <input type="text" name="nome" value="<?= htmlspecialchars($aluno->nome) ?>" required />
        <br><br>
        
        <label>Telefone: </label>     
        <input type="text" name="telefone" value="<?= htmlspecialchars($aluno->telefone) ?>"/>
        <br><br>

        <label>Endereço: </label>     
        <input type="text" name="endereco" value="<?= htmlspecialchars($aluno->endereco) ?>"/>
        <br><br>

        <label>E-mail: </label>     
        <input type="email" name="email" value="<?= htmlspecialchars($aluno->email) ?>" required />
        <br><br>

        <label>Curso:</label><br>
        <?php
        $cursos = ["Técnico em Informática", "Técnico em Logística", "Técnico em Administração"];

        foreach ($cursos as $c) {
            $checked = ($aluno->curso == $c) ? 'checked' : ''; 
            echo "<input type='radio' name='curso' value='{$c}' {$checked} required /> {$c}<br>";
        }
        ?>
        <br>

        <input type="submit" value="Alterar Dados" name="btnAlterar"/>
        
    </form>
</body>
</html>