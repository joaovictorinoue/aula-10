<?php 
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$arquivo = fopen("clientes.csv", "a");

fwrite($arquivo, $nome . ",");
fwrite($arquivo, $cidade . ",");
fwrite($arquivo, $estado . ",");
fwrite($arquivo, $telefone . "\n");

fclose($arquivo);

header("location:index.html");
?>