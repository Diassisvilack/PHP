<?php
$numero = $_GET['numero'];
switch ($numero){
case 0 : echo ("Escolheu o digito Zero"); break;
case 1 : echo ("Escolheu o digito Um"); break;
case 2 : echo ("Escolheu o digito Dois"); break;
case 3 : echo ("Escolheu o digito Três"); break;
case 4 : echo ("Escolheu o digito Quatro"); break;
case 5 : echo ("Escolheu o digito cinco"); break;

default : echo ("Não foi escolhido digito algum");

}
//var_dump($_GET);

?>