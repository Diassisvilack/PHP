<?php 
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $mae = $_POST['mae'] ?? '';
    $pai = $_POST['pai'] ?? '';
    $data_nascimento = $_POST['data_nascimento'] ?? '';

    $sql = "INSERT INTO pessoas (nome, email, mae, pai, data_nascimento)
            VALUES (:nome, :email, :mae, :pai, :data_nascimento)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mae', $mae);
    $stmt->bindParam(':pai', $pai);
    $stmt->bindParam(':data_nascimento', $data_nascimento);
    $stmt->execute();

    echo "<p>Dados cadastrados com sucesso!</p><br>";
    echo "<p><a href='index.html'>Voltar à Página Inicial</a></p>";
} else {
    echo "<p>Requisição inválida.</p>";
}
?>