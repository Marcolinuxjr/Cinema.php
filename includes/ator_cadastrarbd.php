<?php

require_once "conexao.php";

$nome = filter_input(INPUT_POST,"nome_ator",FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "INSERT INTO atores (nome_ator) VALUES ('$nome')";
$conexao->query($sql);

#redirect
header("Location: ../index.php?page=atores_lista");


