<?php
require_once '../control/consultarAlunoControl.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
<title>Consultar Alunos</title>
 <link rel="stylesheet" href="../estilo.css">
</head>
<body>
 <nav class="navbar">
  <ul>
 <li><a href="index.php">Home</a></li>
 <li><a href="cadastrarAluno.php">Cadastrar</a></li>
 <li><a href="consultarAluno.php">Consultar</a></li>
  </ul>
 </nav>
 <div class="container">
  <h1>CONSULTAR ALUNOS</h1>
  
  <?php 
 if(isset($_GET['msg'])) {
 $msg = $_GET['msg'];
 $cor = (strpos($msg, 'erro') !== false) ? 'red' : 'green';
 
 if ($msg == 'sucesso') $text = 'Aluno cadastrado com sucesso!';
 else if ($msg == 'excluido') $text = 'Aluno excluído com sucesso.';
 else if ($msg == 'alterado') $text = 'Dados do aluno alterados com sucesso.';
 else $text = 'Ocorreu um erro na operação.';
 
 echo "<p style='color: {$cor}; font-weight: bold;'>{$text}</p>";
 }
 ?>

 <table>
 <thead>
  <tr>
   <th>Matrícula</th>
   <th>Nome</th>
   <th>Telefone</th>
   <th>Endereco</th>
   <th>E-mail</th>
   <th>Curso</th>
  </tr>
  </thead>
 <tbody>
  <?php if (!empty($listaAlunos)): ?>
 <?php foreach ($listaAlunos as $aluno): ?>
   <tr>
 <td><?php echo htmlspecialchars($aluno->matricula); ?></td>
 <td><?php echo htmlspecialchars($aluno->nome); ?></td>
<td><?php echo htmlspecialchars($aluno->telefone); ?></td></tr>
 <td><?php echo htmlspecialchars($aluno->endereco); ?></td>
 <td><?php echo htmlspecialchars($aluno->email); ?></td>
  <td><?php echo htmlspecialchars($aluno->curso); ?></td>
  <td>
 <a href="alterarAluno.php?matricula=<?php echo $aluno->matricula; ?>">Alterar</a> |
 <a href="../control/excluirAlunoControl.php?matricula=<?php echo $aluno->matricula; ?>" onclick="return confirm('Tem certeza que deseja excluir o aluno <?php echo htmlspecialchars($aluno->nome); ?>?');">Excluir</a>
  </td>
  </tr>
 <?php endforeach; ?>
<?php else: ?>
 <tr><td colspan="5">Nenhum aluno cadastrado.</td></tr>
 <?php endif; ?>
 </tbody>
</table> </div>
</body>
</html>