<?php
    //require_once 'conexao.php';
    
    class ProdutoDAO{
        public $conexao;

        public function __construct($conexao){
           $this->conexao = $conexao;
        }

        public function cadastrarProduto($produtoDTO){
            
            try{
                $sql = 'INSERT INTO produto (nome , valor , quantidade , descricao) VALUES (:nome, :valor , :quantidade , :descricao)';
            
                $insert = $this->conexao->prepare($sql);

                $nome = $produtoDTO->__getNome();
                $valor = $produtoDTO->__getValor();
                $quantidade = $produtoDTO->__getQuantidade();
                $descricao = $produtoDTO->__getDescricao();

                $insert->bindValue(":nome",$nome);
                $insert->bindValue(":valor",$valor);
                $insert->bindValue(":quantidade",$quantidade);
                $insert->bindValue(":descricao",$descricao);

                if($insert->execute()){
                    echo "Produto Cadastrado com Sucesso!!!!!";
                }else{
                    echo "Erro ao Cadastrar Produto!!!!!";
                }

            }catch (PDOException $erro){

            }
            
        }
        
        public function consultarProduto($produtoDTO){
            try{

                $sql = 'SELECT * FROM produto';
                $consulta = $this->conexao->prepare($sql);
                if($consulta->execute()){
                    if($consulta->rowcount() > 0){
                        $listaProdutos = $consulta->fetchAll();
                        $produtoDTO->__setListaProdutos($listaProdutos);
                    }
                }else{
                    echo "Erro ao Consultar Produtos";
                }

            }catch(PDOException $erro){

            }

        }

        public function consultarId(int $id){
            include_once '../model/DTO/ProdutoDTO.php';
        
            $sql = 'SELECT * FROM produto WHERE id = :id';
            $consultaId = $this->conexao->prepare($sql);
            $consultaId->bindValue(":id",$id);
            $consultaId->execute();
        
            return $consultaId->fetchObject("ProdutoDTO");
        }

        public function excluirProduto($id){
            try{

                $sql = 'DELETE FROM produto WHERE id = :id';
                $delete = $this->conexao->prepare($sql);
                $delete->bindValue(":id",$id);
                $delete->execute();

            }catch(PDOException){

            }
        }

         public function alterarProduto($produtoDTO, $id){
            try{

                $sql = 'UPDATE produto SET nome=:nome, valor=:valor, quantidade=:quantidade, descricao=:descricao WHERE id=:id';
                $altera = $this->conexao->prepare($sql);

                $nome = $produtoDTO->__getNome();
                $valor = $produtoDTO->__getValor();
                $quantidade = $produtoDTO->__getQuantidade();
                $descricao = $produtoDTO->__getDescricao();
                
                $altera->bindValue(":nome",$nome);
                $altera->bindValue(":valor",$valor);
                $altera->bindValue(":quantidade",$quantidade);
                $altera->bindValue(":descricao",$descricao);
                $altera->bindValue(":id",$id);

                $altera->execute();

            }catch(PDOException){

            }
        }

       
        
    }
?>