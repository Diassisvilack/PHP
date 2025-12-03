<?php
class Conexao {
    private static $instance;
    private function __construct() {}

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $dsn = "mysql:host=localhost;dbname=escola"; 
            $usuario = "root";     
            $senha = "";           

            try {
                self::$instance = new PDO($dsn , $usuario, $senha);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            } catch (PDOException $erro) {
                die("Erro Fatal de Conexão: " . $erro->getMessage());
            }
        }
        return self::$instance;
    }
}
?>