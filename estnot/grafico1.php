<?php
require_once 'conecta.php';
$ads = 0;
$direito = 0;
$fisioterapia = 0;
$design = 0;
$enfermagem = 0;
$consulta = $pdo->query("SELECT curso FROM aluno;");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
if ($linha["curso"] == "ADS"){$ads++;}
if ($linha["curso"] == "Direito"){$direito++;}
if ($linha["curso"] == "Fisioterapia"){$fisioterapia++;}
if ($linha["curso"] == "Design"){$design++;}
if ($linha["curso"] == "Enfermagem"){$enfermagem++;}
}
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['ADS',         <?php echo("$ads");?>],
          ['Direito',     <?php echo("$direito");?>],
          ['Fisioterapia',<?php echo("$fisioterapia");?>],
          ['Design',      <?php echo("$design");?>],
          ['Enfermagem',  <?php echo("$enfermagem");?>]
        ]);

        var options = {
          title: 'Alunos por curso na Estácio - Estação',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    <center><a href="busca.php"><img src="imgs/voltar.png" width="40" height="40"></a></center>
  </body>
</html>
