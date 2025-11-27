<?php
require 'conexao.php';

$id = $_GET['id'] ?? '';

if ($id !== '') {
    $sql = "DELETE FROM pessoas WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    echo "Pessoa excluída com sucesso!";
} else {
    echo "ID inválido.";
}
?>