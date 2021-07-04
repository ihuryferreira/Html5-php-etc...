<?php
require_once 'conecta.php';
$id = $_REQUEST["idaluno"];
//echo "$id";
try {
  $stmt = $pdo->prepare('DELETE FROM aluno WHERE idaluno = :id');
  $stmt->bindParam(':id', $id);
  $stmt->execute();
 echo "<script>alert('Registro apagado com sucesso.');window.location.assign('busca.php');</script>";
  //echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>