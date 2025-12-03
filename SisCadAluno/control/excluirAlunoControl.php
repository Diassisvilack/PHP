<?php
require_once '../model/alunoDAO.php';

// 1. Receber a matrícula a ser excluída (via GET)
$matricula = filter_input(INPUT_GET, 'matricula', FILTER_SANITIZE_NUMBER_INT);

if ($matricula) {
    // 2. Chamar o DAO para excluir
    $alunoDAO = new AlunoDAO();
    $sucesso = $alunoDAO->excluir($matricula);
    
    // 3. Redirecionar
    if ($sucesso) {
        header("Location: ../view/consultarAluno.php?msg=excluido");
    } else {
        header("Location: ../view/consultarAluno.php?msg=erro_excluir");
    }
} else {
    header("Location: ../view/consultarAluno.php?msg=erro_matricula");
}
exit();
?>