<?php
require_once 'conecta.php';
$id = $_REQUEST["idaluno"];
//echo "$id";
$consulta = $pdo->query("SELECT * FROM aluno WHERE idaluno =$id;");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {


echo "
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>

<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Cadastro de Alunos</title>
</head>
<body>
<form action='atualizar.php' method='post'>
	<fieldset name='aluno' style='max-width:500px;'>
		<legend>Dados do aluno</legend>
		<p><label for='matricula'>Matrícula</label>
		<input type='text' name='matricula' value='".$linha['matricula']."' maxlength='12'></p>
		<p><label for='nome'>Nome</label>
		<input type='text' name='nome' value='".$linha['nome']."' maxlength='50'> &nbsp;&nbsp; <a href='busca.php'><img src='imgs/lupa.png' width='20' height='20' align='center'></a></p>
		<p><label for='telefone'>Telefone</label>
		<input type='text' name='telefone' value='".$linha['telefone']."' maxlength='14'></p>
		<p><label for='email'>E-mail</label>
		<input type='text' name='email'value='".$linha['email']."' maxlength='40'></p>
		<label for='curso'>Curso</label>
		   <select name='curso'>
		    <option selected>".$linha['curso']."</option>
		   	<option>ADS</option>
		   	<option>Design</option>
		   	<option>Direito</option>
		   	<option>Enfermagem</option>
		   	<option>Fisioterapia</option>
		   </select>
		   <label for='turno'>Turno</label>
		   <select name='turno'>
		   	<option selected>".$linha['turno']."</option>
		   	<option>not</option>
		   	<option>mat</option>
		   </select>
		   <label for='periodo'>Período</label>
		   <select name='periodo'>
		   	<option selected>".$linha['periodo']."</option>
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
		   <input type='hidden' name='status' value='ativo'>
		   <input type='hidden' name='idaluno' value='".$linha['idaluno']."'>
		   <hr>
		   <input type='submit' name='btEnviar' value='Salvar Dados...''>
	</fieldset>
</form>
</body>
</html>
";
}
?>