<?php
$id = $_GET['id'] ?? 0;

try {
    $pdo = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM pessoas WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    echo "Registro excluído com sucesso! <a href='index.html'>Voltar</a>";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>