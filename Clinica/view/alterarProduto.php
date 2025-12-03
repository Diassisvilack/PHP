<?php
    include_once '../model/DAO/ProdutoDAO.php';
    include_once '../model/DAO/conexao.php';
    
    

    $produtoDAO = new ProdutoDAO($conexao);
    $edita = $produtoDAO->consultarId($_GET['id']);
    //var_dump($edita);
    //echo $edita['nome'];

    ?>

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

<h1>Alterar Produto</h1>


<form method="POST" action="../control/alterarProdutoControl.php">
    
    <input type="hidden" name="idAlterar" value="<?= $_GET['id']; ?>" />
    
    <label>Nome do Produto: </label>    
    <input type="text" name="nome" value="<?= $edita->__getNome() ?>"/>
    <br><br>
    
    <label>Valor do Produto: </label>    
    <input type="text" name="valor" value="<?= $edita->__getValor() ?>"/>
    <br><br>

    <label>Quantidade do Produto: </label>    
    <input type="number" name="quantidade" value="<?= $edita->__getQuantidade() ?>"/>
    <br><br>

    <label>Descrição do Produto: </label>    
    <input type="text" name="descricao" value="<?= $edita->__getDescricao() ?>"/>
    <br><br>

    <input type="submit" value="Alterar " name="btnCadastrar"/>
    
 
</form>



</body>
</html>