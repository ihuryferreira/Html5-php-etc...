<?php
require_once 'conecta.php';
$usuario = $_POST['usuario'];
$senha   = MD5($_POST['senha']);
//echo("$usuario, $senha");
//echo("$usuario,". base64_decode($senha));

try {

  $stmt = $pdo->prepare('INSERT INTO usuario VALUES (:id, :user, :senha)');
  $stmt->execute(array(
  	':id'    => Null,
  	':user'  => $usuario,
    ':senha' => $senha
  ));
echo "<script>alert('Usuario gravado com sucesso.');window.location.assign('index.php');</script>";
 // echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

?>