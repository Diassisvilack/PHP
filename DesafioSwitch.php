<?php
$numero = $_GET['numero'];
switch($numero) {
    case 1 :  echo ("Dia - Hoje é Domingo");break;
    case 2 :  echo ("Dia - Hoje é Segunda");break;
    case 3 :  echo ("Dia - Hoje é Terça");break;
    case 4 :  echo ("Dia - Hoje é Quarta");break;
    case 5 :  echo ("Dia - Hoje é Quinta");break;
    case 6 :  echo ("Dia - Hoje é Sexta");break;
    case 7 :  echo ("Dia - Hoje é Sabado");break;

    default : echo ("A semana só tem 7 dias");




}

?>