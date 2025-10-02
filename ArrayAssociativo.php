<?php  
$carros  =  [
    'Uno'  =>  1991,
    'Palio'  =>  2000,
    'Gol'  =>  2025,
    'Passat'  =>  1998,
    'Parati'  =>  1999
];
if(!empty($_GET ['ano'] ) ) {
    $ano = $_GET['ano'];
    echo ("você selecionou o(s) modelo (s : ) ;
  

}

}


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
    <form>
        <?php foreach ($carros as $modelo => $ano ) {?>
             <inpty type ="checkbox" name"ano[]" value="1991" <?php ?> echo $ano />
             <label><?php  echo $modelo; ?></label>
             <br>
        <?php } ?>
        <input type="submit" value="Enviar">
        
        <input type ="checkbox"/>
        <label>Uno</label>
        <br>
        <input type ="checkbox"/>
        <label>Palio</label>
        <br>
        <input type ="checkbox"/>
        <label>Gol</label>
        <br>
        <input type ="checkbox"/>
        <label>Passat</label>
        <br>
        <input type ="checkbox"/>
        <label>Parati</label>
        <br>
        <input typer=" submit " value = "Enviar"/>
    </form>
    
</body>
</html>