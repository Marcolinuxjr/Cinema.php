<?php
require_once 'conexao.php';

//capturo o id da url
//porque o filter_input pega dados da url
//tambem é usado para pegar dados do formulario via post/get
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM filmes WHERE cod_filme=$id";
$conexao->query($sql);

//redireciona
header('Location: ../index.php?page=filme_lista');