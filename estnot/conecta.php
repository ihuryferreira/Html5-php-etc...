<?php
$pdo = new PDO('mysql:host=localhost;dbname=aluno', 'root', Null);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>