<?php
require_once '../model/alunoDTO.php';
require_once '../model/alunoDAO.php';


$nome     = trim(htmlspecialchars($_POST['nome'] ?? ''));
$telefone = trim(htmlspecialchars($_POST['telefone'] ?? ''));
$endereco = trim(htmlspecialchars($_POST['endereco'] ?? ''));
$email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$curso    = trim(htmlspecialchars($_POST['curso'] ?? ''));

if (empty($nome) || empty($curso)) {
    header("Location: ../view/cadastrarAluno.php?msg=erro_dados_obrigatorios");
    exit();
}

$alunoDTO = new AlunoDTO();
$alunoDTO->nome = $nome;
$alunoDTO->telefone = $telefone;
$alunoDTO->endereco = $endereco;
$alunoDTO->email = $email;
$alunoDTO->curso = $curso;

$alunoDAO = new AlunoDAO();
$sucesso = $alunoDAO->cadastrar($alunoDTO);

if ($sucesso) {
    header("Location: ../view/consultarAluno.php?msg=sucesso");
} else {
    header("Location: ../view/cadastrarAluno.php?msg=erro_cadastro");
}
exit();
?>