<?php

echo "Bem vindo  " . $_POST["nomeUsuario"] . "<br>";

echo "Idade  " . $_POST["idadeUsuario"]. "<br>";

echo "Cpf  " . $_POST["cpfUsuario"]. "<br>";

echo "Periodo escolhido foi o  " . $_POST["periodoUsuario"]. "<br>";


$nome = $_POST['nomeUsuario'];
$idade = $_POST['idadeUsuario'];
$cpf = $_POST['cpfUsuario'];
$periodo = $_POST['periodoUsuario'];

$arquivo = fopen('alunos.csv','a'); // abro o arquivo p/ append
fwrite($arquivo, "$nome;$idade;$cpf;$periodo\r\n");
fclose($arquivo);