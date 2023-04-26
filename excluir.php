<?php
include("conecta.php");
$matricula = $_GET["m"];


$comando = $pdo->prepare("DELETE FROM alunos WHERE Matrícula=$matricula");
$resultado = $comando->execute();

header("Location: index.html");
?>