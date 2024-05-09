<?php
# arquivos includes/genero_cadastrarbd.php
require "conexao.php";

# receber dados do campo input
$nome = filter_input(INPUT_POST, 'nome_genero', FILTER_SANITIZE_SPECIAL_CHARS);

# salva no bd
$sql = "INSERT INTO generos (nome_genero) VALUES ('$nome')";
$conexao->query($sql);

# redireciona
header('Location: ../index.php?page=genero_lista');
?>