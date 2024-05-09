<?php
# arquivo inclues/genero_editarbd.php

require_once 'conexao.php';

# recebr os dados...
$cod = filter_input(INPUT_POST, 'cod_ator', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome_ator', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "UPDATE atores SET nome_ator='$nome' WHERE cod_ator=$cod";
$conexao->query($sql);

# redireciona
header('Location: ../index.php?page=atores_lista');
?>
