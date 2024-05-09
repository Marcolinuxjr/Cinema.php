<?php
require_once 'conexao.php';

//receber os dados
$cod = filter_input(INPUT_POST, 'cod_filme', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "UPDATE filmes SET titulo='$nome' WHERE cod_filme=$cod";
$conexao->query($sql);

//redireciona
header('Location: ../index.php?page=filme_lista');
?>