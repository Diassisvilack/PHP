<?php
$id = $_GET['id'] ?? 0;

try {
    $pdo = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM pessoas WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $pessoa = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($pessoa) {
        echo "ID: " . $pessoa['id'] . "<br>";
        echo "Nome: " . $pessoa['nome'] . "<br>";
        echo "Email: " . $pessoa['email'] . "<br>";
    } else {
        echo "Pessoa não encontrada.";
    }
    echo "<br><a href='index.html'>Voltar</a>";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>