<php
echo "sejam bem vindo !!!!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sisCarProduto</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <nav>
        <ul> 
        <li> <a href="index.php">Home</a></li>
        <li><a href="cadastrarproduto.php">Cadastrar</a></li>
        <li><a href="consultarproduto.php">Consultar</a></li>
</ul>
    </nav>
    <h1>CADASTRA PRODUTO</h1>
    <FORM method="POSP"  action="cadastraprodutocontrol.php">
        <label>Nome Produto:</label>
        <input type="text" nome="nome"/>
        <br><br>
        <label>Valor Produto:</label>
        <input type="text" nome="valor"/>
        <br><br>
        <label>Quantidade Produto:</label>
        <input type="number" nome="quantidade"/>
        <br><br>
        <label>Descricao Produto:</label>
        <input type="text" nome="descricao"/>
        <br><br>

        <input type="submit" value="cadastrar" nome="bet"/>
    </FORM>
</body>
</html>