<?php
date_default_timezone_set("Brazil/East");
$arq = date("d-m-y-H-i-s");   
$nome = "Daniel Gomes de Oliveira";
echo "$arq";

$ponteiro = fopen($arq.".doc", "w");
fwrite($ponteiro, $nome);
fclose($ponteiro);

?>