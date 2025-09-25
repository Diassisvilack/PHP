<?php
if(!empty ($_POST['numero'] )&& is_numeric ($_POST['numero']) ) {
    $numero = $_POST['numero'];
for( $cont = 0  ;  $cont <= 10   ;  $cont++ ){
    echo nl2br("$numero + $cont = ". $numero  + $cont."\n");

}

}else{
    echo("Variável não setado  ou vazia ou não foi digitado um número" );
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Informe um número:</label>
        <input type="password" name="numero" placeholder= "Digite um númrero"/>
        <button type="submit">Enviar</button>
        </empty>
    </form>
    
</body>
</html>