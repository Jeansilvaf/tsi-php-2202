<?php 
//busca o cod que conecta o SGBD
require_once '../bancoDeDados/conecta.php';

$email = trim($_POST['usuario']); // trim tira espaços do comeco e fim
$senha = trim($_POST['senha']); 

$stmt = $bd->prepare(" SELECT
                            nome, senha
                        FROM
                            usuarios
                        WHERE
                            email = :email ");

$stmt->bindParam(':email', $email);

$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

$autenticou = false;

if( isset($usuario['nome']) ){

}

include 'index.php';


