<?php
require_once '../model/DAO/ProdutoDAO.php';
    class ProdutoDTO{
        private $id;
        private $nome;
        private $valor;
        private $quantidade;
        private $descricao;
        private $listaProduto;

        public function __construct(){

        }

        public function __getId(){
            return $this->id;
        }

        public function __setId($id){
            return $this->id = $id;
        }

        public function __getNome(){
            return $this->nome;
        }

        public function __setNome($nome){
            return $this->nome = $nome;
        }

        public function __getValor(){
            return $this->valor;
        }

        public function __setValor($valor){
            return $this->valor = $valor;
        }

        public function __getQuantidade(){
            return $this->quantidade;
        }

        public function __setQuantidade($quantidade){
            $this->quantidade = $quantidade; 
        }

        public function __getDescricao(){
            return $this->descricao;
        }

        public function __setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function __setListaProdutos($listaProduto){
            $this->listaProduto = $listaProduto;
        }

        public function __getListaProdutos(){
            return $this->listaProduto;
        }

        public function __getById(int $id){

            $produtoDAO = new ProdutoDAO();

            $produtoDAO = $ProdutoDAO->consultarId((int) $_GET['id'] );

            var_dump($produtoDAO);

        }
    }
?>