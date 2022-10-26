<?php

//Buscamos o codigo que conecta ao SGBD
require_once '../bancoDeDados/conecta.php';
//include_once(); não gera erro faltal se nao existir

$nome = $_POST["nome"];

$turno = $_POST["turno"];

$inicio = $_POST["inicio"];

//dados do form html


$consulta = 
    $bd->prepare('  INSERT INTO alunos 
                    (nome, turno, inicio)
                VALUE 
                    (:nome, :turno, :inicio)');

/* 
A função "$bd->prepare" ta retornando uma variavel( objeto)  de state, 
onde vai juntar os dados do usuario 
e assim fazer a consulta SQL
*/

$consulta->bindParam('nome', $nome);
$consulta->bindParam('turno', $turno);
$consulta->bindParam('inicio', $inicio);

/*
A função bindParam substitui os rotulos 
(exemplo :nome)
pelos dados inseguros
*/
if($consulta->execute()){
    echo "Gravou com sucesso";
}else{
    echo "Erro ao gravar dados";
}
//Finalmente executamos a consulta 

