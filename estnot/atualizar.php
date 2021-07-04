<?php
require_once 'conecta.php';
$idaluno   = $_POST["idaluno"];
$matricula = $_POST["matricula"];  
$nome      = $_POST["nome"]; 
$telefone  = $_POST["telefone"];
$email     = $_POST["email"];
$curso     = $_POST["curso"];
$turno     = $_POST["turno"];
$periodo   = $_POST["periodo"];
$status    = $_POST["status"];
//echo("$idaluno, $matricula, $nome, $telefone, $email, $curso, $turno, $periodo, $status");

try {

  $stmt = $pdo->prepare('UPDATE aluno SET idaluno = :idaluno, matricula = :matricula, nome = :nome, telefone = :telefone, email = :email, curso = :curso, turno = :turno, periodo = :periodo, status = :status WHERE idaluno = :idaluno');
  $stmt->execute(array(
    ':idaluno'   => $idaluno,
    ':matricula' => $matricula,
    ':nome'      => $nome,
    ':telefone'  => $telefone,
    ':email'     => $email,
    ':curso'     => $curso,
    ':turno'     => $turno,
    ':periodo'   => $periodo,
    ':status'    => $status
  ));
  echo "<script>alert('Registro atualizado com sucesso.');window.location.assign('busca.php');</script>";
 // echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

?>