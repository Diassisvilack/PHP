<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="cadastrarPaciente.php">Cadastrar</a></li>
            <li><a href="consultarPaciente.php">Consultar</a></li>
        </ul>

    </nav>
</header>

<h1>Cadastrar Paciente</h1>

<form method="POST" action="../control/cadastrarPacienteControl.php">
<div>
<label>Nome do Paciente: </label>    
<input type="text" name="Nome"/>
    <br><br>
</div>
    
    <div>
    <label>CPF do Paciente: </label>    
    <input type="text" name="CPF"/>
    <br><br>
    </div>

    <div>
    <label>Telefone do Paciente: </label>    
    <input type="number" name="Telefone"/>
    <br><br>
    </div>

    <div>
    <label>Email do Paciente: </label>    
    <input type="text" name="Email"/>
    <br><br>
    </div>

    <div>
    <label for="Genero" class="form-label">Genero</label>
    
  
    </div>

    <input type="submit" value="Cadastrar" name="btnCadastrar" class="btn btn-success mt-3"/>
    <input type="hidden" name="id"/>

</form>



</body>
</html>