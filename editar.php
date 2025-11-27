<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $mae = $_POST['mae'] ?? '';
    $pai = $_POST['pai'] ?? '';
    $data_nascimento = $_POST['data_nascimento'] ?? '';

    $sql = "UPDATE pessoas SET nome = :nome, email = :email, mae = :mae, pai = :pai, data_nascimento = :data_nascimento WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mae', $mae);
    $stmt->bindParam(':pai', $pai);
    $stmt->bindParam(':data_nascimento', $data_nascimento);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    echo "Dados atualizados com sucesso!";
} else {
    echo "Requisição inválida.";
}
?>