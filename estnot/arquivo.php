<?php
$arquivo = "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>";
require_once 'conecta.php';
$cor="#cccccc";
$consulta = $pdo->query("SELECT idaluno, matricula, nome, curso FROM aluno;");
$arquivo .= ("<table border=1 class=table>
     <tr bgcolor=#87CEEB>
        <td class=text-center><b>ID</b></td>
        <td><center><b>Matricula</b></center></td>
        <td><center><b>Nome</b></center></td>
        <td><center><b>Curso</b></center></td>
     </tr>
  ");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
  if ($cor == "#cccccc"){$cor = "#ffffff";}else{$cor = "#cccccc";}
    $arquivo .= "
            <tr bgcolor=$cor>
              <td class=text-center>{$linha['idaluno']}</td>
              <td class=text-center>{$linha['matricula']}</td>
              <td>{$linha['nome']}</td>
              <td class=text-center>{$linha['curso']}</td>
            ";
}
echo "</table>";
$ponteiro = fopen("relatorio.xls", "w");
fwrite($ponteiro, $arquivo);
fclose($ponteiro);

//echo("RELATÓRIO GERADO COM SUCESSO: <a href='http://localhost/estacio/relatorio.xls'>SALVAR</a>");
//echo("<center><br><br><a href='http://localhost/estacio/busca.php'><img src='imgs/voltar.png'></a></center>");


//echo("</table><br><img src='imgs/print.png' width='40' height='40' onclick=print();><a href=grafico1.php><img src=imgs/grafico.png width='40' height='40'></a> ");

?>