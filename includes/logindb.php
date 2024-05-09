<?php
require 'conexao.php';

$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST,'senha');

$sql = "SELECT * FROM usuario WHERE email='$email'";

$usuarios = $conexao->query($sql);

if(!$usuarios->rowCount()){
    header("Location: ../index.php?page=login&erro=1");
    exit;
}

$usuario = $usuarios->fetch();

if(password_verify($senha,$usuario['senha'])){
    #inicie a sessao
    session_start();
    $_SESSION['cod'] = $usuario['cod'];
    header("Location: ../index.php");
    exit;
    
}else{
    header("Location: ../index.php?page=login&erro=2");
    exit;
}