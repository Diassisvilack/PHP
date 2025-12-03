<?php

    require_once '../model/DTO/ProdutoDTO.php';
    require_once '../model/DAO/ProdutoDAO.php';
    require_once '../model/DAO/conexao.php';

    if (!empty($_GET['id'])){

        $id = $_GET['id'];

        $produtoDAO = new ProdutoDAO($conexao);
        $produtoDAO->excluirProduto( $id);
    }
     header("Location: ../view/consultarProduto.php");
?>