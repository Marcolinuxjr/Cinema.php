<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
1 - email ja esta cadastrado
2 - senha e senha2 nao batem
*/

#RECEBE OS DADOS DO FORMULARIO
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST,'senha');
$senha2 = filter_input(INPUT_POST,'senha2');


/*
CREATE TABLE usuario(
    cod INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);
*/

#VERIFICA CONFERENCIA DAS SENHAS
if($senha != $senha2){
    header("Location: ../index.php?page=usuario_cadastrar&erro=2");
    exit;
}
require 'conexao.php';
$conexao->query("SELECT * FROM usuario WHERE email='$email'");
#criptografar senha
$hash = password_hash($senha,PASSWORD_BCRYPT);
#verifica se o email ja existe
$u = $conexao->query("INSERT INTO usuario (email, senha) VALUES ('$email', '$hash')");
if($u->rowCount() > 0){
    header("Location: ../index.php?page=usuario_cadastrar&erro=1");
    exit;
}

header("Location: ../index.php?page=login");
