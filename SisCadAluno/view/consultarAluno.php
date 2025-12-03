<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="cadastrarAluno.php">Cadastrar</a></li>
            <li><a href="consultarAluno.php">Consultar</a></li>
        </ul>
    </nav>

    <h1>Cadastrar Aluno</h1>

    <form method="POST" action="../control/cadastrarAlunoControl.php">
        <div>
            <label>Matricula do Aluno: </label>     
            <input type="text" name="Matricula"/>
            <br><br>
        </div>
        
        <div>
            <label>Nome do Aluno: </label>     
            <input type="text" name="Nome"/>
            <br><br>
        </div>

        <div>
            <label>Telefone do Aluno: </label>     
            <input type="number" name="Telefone"/>
            <br><br>
        </div>

        <div>
            <label>E-mail: </label>     
            <input type="text" name="E-mail"/>
            <br><br>
        </div>
        
        <div>
            <label>Curso: </label>     
            <input type="text" name="Curso"/>
            <br><br>
        </div>
        
        <div>
            