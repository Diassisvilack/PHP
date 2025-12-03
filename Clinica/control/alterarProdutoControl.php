<?php

    require_once '../model/DTO/ProdutoDTO.php';
    require_once '../model/DAO/ProdutoDAO.php';
    require_once '../model/DAO/conexao.php';

    if (!empty($_POST['idAlterar'])){

        $id = $_POST['idAlterar'];

        $produtoDAO = new ProdutoDAO($conexao);
        $produtoDAO->consultarId($id);

        $produtoDTO = new ProdutoDTO();
        $produtoDTO->__setNome($_POST['nome']);
        $produtoDTO->__setValor($_POST['valor']);
        $produtoDTO->__setQuantidade($_POST['quantidade']);
        $produtoDTO->__setDescricao($_POST['descricao']);
    
       $produtoDAO->alterarProduto($produtoDTO, $id);
    }
    header("Location: ../view/consultarProduto.php");
?>