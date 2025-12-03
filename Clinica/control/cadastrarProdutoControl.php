<?php
    require_once '../model/DTO/ProdutoDTO.php';
    require_once '../model/DAO/ProdutoDAO.php';
    require_once '../model/DAO/conexao.php';
    

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST['btnCadastrar']){
            $produtoDTO = new ProdutoDTO();
            $produtoDTO->__setNome($_POST['nome']);
            $produtoDTO->__setValor($_POST['valor']);
            $produtoDTO->__setQuantidade($_POST['quantidade']);
            $produtoDTO->__setDescricao($_POST['descricao']);
            
            $produtoDAO = new ProdutoDAO($conexao);
            $produtoDAO->cadastrarProduto($produtoDTO);
        }

        header("Location: ../view/consultarProduto.php");
    }

   


?>