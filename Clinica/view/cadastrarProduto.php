<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="cadastrarProduto.php">Cadastrar</a></li>
            <li><a href="consultarProduto.php">Consultar</a></li>
        </ul>

    </nav>
</header>

<h1>Cadastrar Produto</h1>

<form method="POST" action="../control/cadastrarProdutoControl.php">
<label>Nome do Produto: </label>    
<input type="text" name="nome"/>
    <br><br>
    
    <label>Valor do Produto: </label>    
    <input type="text" name="valor"/>
    <br><br>

    <label>Quantidade do Produto: </label>    
    <input type="number" name="quantidade"/>
    <br><br>

    <label>Descrição do Produto: </label>    
    <input type="text" name="descricao"/>
    <br><br>

    <input type="submit" value="Cadastrar" name="btnCadastrar"/>
    <input type="hidden" name="id"/>
</form>



</body>
</html>