<?php
require_once '../model/alunoDTO.php';
require_once '../model/alunoDAO.php';

$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_NUMBER_INT);
$nome      = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone  = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$endereco  = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$email     = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$curso     = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_STRING);


if ($matricula) {
    
    $alunoDTO = new AlunoDTO();
    $alunoDTO->matricula = $matricula; 
    $alunoDTO->nome = $nome;
    $alunoDTO->telefone = $telefone;
    $alunoDTO->endereco = $endereco;
    $alunoDTO->email = $email;
    $alunoDTO->curso = $curso;

    $alunoDAO = new AlunoDAO();
    $sucesso = $alunoDAO->alterar($alunoDTO);

    if ($sucesso) {
        header("Location: ../view/consultarAluno.php?msg=alterado");
    } else {
        header("Location: ../view/consultarAluno.php?msg=erro_alterar");
    }
} else {
    header("Location: ../view/consultarAluno.php?msg=erro_matricula");
}
exit();
?>