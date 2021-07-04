<?php
session_start();
if(isset($_SESSION['logado'])){
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>Cadastro de Alunos</title>
</head>
<body>
<a href="logout.php">Logout</a>
<form action="gravar.php" method="post">
	<fieldset name="aluno" style="max-width:1000px;" class="border p-2">
		<legend>Dados do aluno</legend>
		<p><label for="matricula">Matrícula</label>
		<input type="text" class="form-control" name="matricula" maxlength="12"></p>
		<p><label for="nome">Nome</label>
		<input type="text" class="form-control" name="nome" maxlength="50"> &nbsp;&nbsp; <a href="busca.php"><img src="imgs/lupa.png" width="20" height="20" align="center"></a></p>
		<p><label for="telefone">Telefone</label>
		<input type="text" class="form-control" name="telefone" maxlength="14"></p>
		<p><label for="email">E-mail</label>
		<input type="text" class="form-control" name="email" maxlength="40"></p>
		<label for="curso">Curso</label>
		   <select name="curso" class="form-control">
		   	<option>ADS</option>
		   	<option>Design</option>
		   	<option>Direito</option>
		   	<option>Enfermagem</option>
		   	<option>Fisioterapia</option>
		   </select>
		   <label for="turno">Turno</label>
		   <select name="turno" class="form-control">
		   	<option>not</option>
		   	<option>mat</option>
		   </select>
		   <label for="periodo">Período</label>
		   <select name="periodo" class="form-control">
		   	<option>1</option>
		   	<option>2</option>
		   	<option>3</option>
		   	<option>4</option>
		   	<option>5</option>
		   	<option>6</option>
		   	<option>7</option>
		   	<option>8</option>
		   	<option>9</option>
		   	<option>10</option>
		   </select>
		   <input type="hidden" name="status" value="ativo">
		   <hr>
		   <input type="submit" class="btn btn-primary" name="btEnviar" value="Salvar Dados...">
	</fieldset>
</form>
</body>
</html>
<?php
}else{
	echo "<script>alert('É preciso logar para acessar a página.');window.location.assign('index.php');</script>";
}
?>