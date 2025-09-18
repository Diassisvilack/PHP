<?php


if(empty($_GET['cont'])&& empty($_GET['numero'])){

    $numero = $_GET['numero'];
    $cont = $_GET['cont'];    


    while ($cont < 10){
        echo nl2br("o numero é: $numero \n");
       $numero = $numero + 1; 
    $cont = $cont + 1;

}
}else{
    if(!empty ($_GET['cont'])){
        echo("Nao foi setado numero");

    }else
    echo("Não foi setado cont");
}







?>