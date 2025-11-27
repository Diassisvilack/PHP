<?php
require 'conexao.php';

$id = $_GET['id'] ?? '';

if ($id !== '') {
    $sql = "SELECT * FROM pessoas WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $pessoa = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($pessoa) {
        echo "<h2>Dados encontrados:</h2>";
        echo "ID: " . $pessoa['id'] . "<br>";
        echo "Nome: " . $pessoa['nome'] . "<br>";
        echo "Email: " . $pessoa['email'] . "<br>";
        echo "Mãe: " . $pessoa['mae'] . "<br>";
        echo "Pai: " . $pessoa['pai'] . "<br>";
        echo "Nascimento: " . $pessoa['data_nascimento'] . "<br>";
    } else {
        echo "Pessoa não encontrada.";
    }
} else {
    echo "ID inválido.";
}
?>