<?php
//Busca o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php'; //traz todo o código de '../bancoDeDados/conecta.php'; para este código
//Apenas para ficar mais fácil de trabalhar
$id = $_POST['id'] ?? 0;
//Evito que seja recebido em $id
//qualquer coisa que seja diferente 
//de números (dígitos)
$id = preg_replace( '/\D/', '', $id);
//esse bd vem da linha 4, tudo o que tá no código conecta e é como se estivesse aqui
if ( $bd->exec("DELETE FROM alunos WHERE id = $id") ) {
    
    $apagado = true;
}else{
    $apagado = false;
}
include 'index.php';