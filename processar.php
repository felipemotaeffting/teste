<?php
require_once "claseCalculo.php";
$calcular = new calculadora();

$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$opcao = $_POST['opcao'];

echo $calcular->calcularDados($val1, $val2, $opcao)




?>