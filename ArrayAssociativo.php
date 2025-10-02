<?php 
// An array to store car models and their corresponding years.
$carros = [
    'Uno'    => 1991,
    'Palio'  => 2000,
    'Gol'    => 2025,
    'Passat' => 1998,
    'Parati' => 1999
];

// Check if the form was submitted and if the 'anos' array is not empty.
if (!empty($_GET['anos'])) {
    $anos_selecionados = $_GET['anos'];

    echo "Você selecionou os modelos com os seguintes anos:<br>";
    
    // Loop through the selected years and display them.
    foreach ($anos_selecionados as $ano) {
        // Use htmlspecialchars for security.
        echo "- " . htmlspecialchars($ano) . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de Carros</title>
</head>
<body>
    <h2>Selecione os carros:</h2>
    <form method="get">
        <?php foreach ($carros as $modelo => $ano) { ?>
            <input type="checkbox" name="anos[]" value="<?php echo htmlspecialchars($ano); ?>">
            <label><?php echo htmlspecialchars($modelo) . ' (' . htmlspecialchars($ano) . ')'; ?></label>
            <br>
        <?php } ?>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>