<?php
$tecnologias = ['JAVA', 'PHP', 'C#', 'PYTHON', 'COBOL'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(!empty($_POST['opcao'])){
$opcao = $_POST['opcao'];
echo "Você selecionou a opção ".$opcao;
}else{
echo "escolha uma opção";
}
}