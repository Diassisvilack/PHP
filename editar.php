<?php
$id = $_POST['id'] ?? 0;
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

try {
    $pdo = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE pessoas SET nome = :nome, email = :email WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    echo "Dados atualizados com sucesso! <a href='index.html'>Voltar</a>";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>