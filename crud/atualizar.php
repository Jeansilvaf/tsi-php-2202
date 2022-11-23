<?php 

require_once '../bancoDeDados/conecta.php';

$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];


$stmt = $bd->prepare(" UPDATE alunos
                            SET nome = :nome,
                                turno = :turno,
                                inicio = :inicio");


$stmt ->bindParam(':nome', $nome);
$stmt ->bindParam(':turno', $nome);
$stmt ->bindParam(':inicio', $nome);

$stmt->execute();



$atualizou = false;
if($stmt->rowCount() > 0){
    $atualizou = true;
}
include 'listar.php';