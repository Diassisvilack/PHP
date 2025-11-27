<?php
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

try {
    $pdo = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO pessoas (nome, email) VALUES (:nome, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    echo "Cadastro realizado com sucesso! <a href='index.html'>Voltar</a>";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>