<?php
require_once 'conecta.php';

$matricula = $_POST["matricula"];  
$nome      = $_POST["nome"]; 
$telefone  = $_POST["telefone"];
$email     = $_POST["email"];
$curso     = $_POST["curso"];
$turno     = $_POST["turno"];
$periodo   = $_POST["periodo"];
$status    = $_POST["status"];
//echo("$matricula, $nome, $telefone, $email, $curso, $turno, $periodo, $status");
try {

  $stmt = $pdo->prepare('INSERT INTO aluno VALUES (:idaluno, :matricula, :nome, :telefone, :email, :curso, :turno, :periodo, :status)');
  $stmt->execute(array(
  	':idaluno'   => Null,
  	':matricula' => $matricula,
    ':nome'      => $nome,
    ':telefone'  => $telefone,
    ':email'     => $email,
    ':curso'     => $curso,
    ':turno'     => $turno,
    ':periodo'   => $periodo,
    ':status'    => $status
  ));
echo "<script>alert('Registro gravado com sucesso.');window.location.assign('inicial.php');</script>";
 // echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>