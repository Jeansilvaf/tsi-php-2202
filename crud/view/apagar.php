<?php
//Buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php';
//APENAS P/ FICAR MAIS FACIL O USO
//COMO DADO ENVIADO PELO USER
$id = $_GET['id'] ?? 0;
//?? quando nn existe $_POST['id'] atribui
// 0 p/ $id


$id = preg_replace('/\D/', '', $id);

if ( $bd->exec("DELETE FROM alunos WHERE id = $id") ){

    $apagou = true;


}else{

    $apagou = false;
}

include 'index.php';
