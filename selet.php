<?php 
include ('dados.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="dados.php"> 
       <select name="selecao"> 
       <?php foreach ($Tecnologias as $Tecnologia) {?>
        <option valeu="<?php echo $Tecnologia; ?>" ><?php echo $Tecnologia; ?> </option>
       <?php 
       } ?>

       <input type="submit" value="Enviar"/>
</form>
    
</body>
</html>

