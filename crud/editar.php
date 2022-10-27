<?php
//Buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php';
//APENAS P/ FICAR MAIS FACIL O USO
//COMO DADO ENVIADO PELO USER
$id = $_GET['id'] ?? 0;
//?? quando nn existe $_POST['id'] atribui
// 0 p/ $id

$stmt = $bd->prepare(' SELECT 
                            id, nome, turno, inicio
                        FROM
                            alunos
                        WHERE
                            id = :id');    

$stmt->bindParam(':id', $id);

$stmt->execute();

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

