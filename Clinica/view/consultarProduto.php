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
    <h1>Consulta Produto</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>VALOR</th>
            <th>QUANTIDADE</th>
            <th>DESCRIÇÃO</th>
        </tr>
        <?php    require_once '../model/DTO/ProdutoDTO.php';
                 require_once '../control/consultarProdutoControl.php';
        
        $listaProdutos = $produtoDTO->__getListaProdutos();
        if ($listaProdutos != null){
            foreach($listaProdutos as $produto) : ?>
                <tr>
                    <td><?= $produto['id'] ?></td>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['valor'] ?></td>
                    <td><?= $produto['quantidade'] ?></td>
                    <td><?= $produto['descricao'] ?></td>   
                    <td><button><a href="../control/excluirProdutoControl.php?id=<?= $produto['id']?>"> Excluir </a></button></td>   
                    <td><button><a href="../view/alterarProduto.php?id=<?= $produto['id']?>"> Alterar </a></button></td>      
                </tr>
        <?php endforeach  ; } ?>
    </table>
</body>
</html>