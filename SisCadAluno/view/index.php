<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão Escolar - Home</title> 
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
            
            <li class="nav-item"><a class="nav-link" href="view/cadastrarAluno.php">Cadastrar</a></li>
            
            <li class="nav-item"><a class="nav-link" href="view/consultarAluno.php">Consultar</a></li>
        </ul>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center text-primary"><?php echo "Bem Vindo: Sistema de Gestão Escolar"; ?></h1>
        <p class="text-center">Utilize o menu de navegação para gerenciar os alunos.</p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6m1vN0tX/x4W62H3xJ2zYvI8oKjY8WlK2H0P1/h4GvH1sV1zT1S2V1jY1D2F1P2Q2R2T2S2W2X2Y2Z2" crossorigin="anonymous"></script>

</body>
</html>