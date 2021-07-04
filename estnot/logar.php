<?php
session_start();
require_once'conecta.php';

if((empty($_POST["usuario"]) or empty($_POST["senha"]))){
	echo "<script>alert('Usuário ou senha devem ser preenchidos.');window.location.assign('index.php');</script>";
}else{
	$aux = 0;
	$consulta = $pdo->query("SELECT user, senha FROM usuario;");
	while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
	//echo "{($linha[user])}, {($linha[senha])}";
		if(($_POST['usuario'] == $linha['user']) && (MD5($_POST['senha']) == $linha['senha'])){
			if($linha != ""){
				$aux++;
			}
		}
}
if($aux > 0){
	$_SESSION['logado']=true;
	echo ("<script>window.location.assign('inicial.php');</script>");
	}elseif($aux == 0){
	  echo "<script>alert('Usuário ou senha invalidos.');window.history.back();</script>";	
	}
}
?>