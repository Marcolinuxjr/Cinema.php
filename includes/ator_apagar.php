<?php
# arquivo includes/genero_apagar.php

require_once 'conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM atores WHERE cod_ator=$id";
$conexao->query($sql);

# redireciona
header('Location: ../index.php?page=genero_lista');
?>