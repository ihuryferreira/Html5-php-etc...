<?php
session_start();
session_destroy();
echo "<script>alert('Usuário deslogado.');window.location.assign('index.php');</script>";
?>