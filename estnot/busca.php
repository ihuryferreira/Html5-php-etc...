<?php
 session_start();
if(isset($_SESSION['logado'])){

echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>";
require_once 'conecta.php';
$cor="#cccccc";
$consulta = $pdo->query("SELECT idaluno, matricula, nome, curso FROM aluno;");

echo("<table border=1 class=table>
     <tr bgcolor=#87CEEB>
        <td class=text-center><b>ID</b></td>
        <td><center><b>Matricula</b></center></td>
        <td><center><b>Nome</b></center></td>
        <td><center><b>Curso</b></center></td>
        <td></td>
        <td></td>
     </tr>
  ");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
  if ($cor == "#cccccc"){$cor = "#ffffff";}else{$cor = "#cccccc";}
    echo "
            <tr bgcolor=$cor>
              <td class=text-center>{$linha['idaluno']}</td>
              <td class=text-center>{$linha['matricula']}</td>
              <td>{$linha['nome']}</td>
              <td class=text-center>{$linha['curso']}</td>
              <td><a href=deletar.php?idaluno={$linha['idaluno']} onclick=\" return confirm('Deseja realmente apagar o registro?'); return false; \"><img src=imgs/del.png width=30 height=30 title='Deletar registro'></a></td>
              <td><a href=editar.php?idaluno={$linha['idaluno']}><img src=imgs/edit.png width=30 height=30 title='Editar registro'></a></td>
            </tr>
            ";
}
echo("</table><br><img src='imgs/print.png' width='40' height='40' onclick=print();><a href=grafico1.php><img src=imgs/grafico.png width='40' height='40'></a><a href=logout.php>Logout</a>");

}else{
echo "<script>alert('É preciso logar para acessar a página.');window.location.assign('index.php');</script>";
}
?>