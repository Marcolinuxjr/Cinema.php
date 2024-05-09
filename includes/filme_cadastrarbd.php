<?php
require 'conexao.php';

//recebe os dados do campo input
$titulo_original = filter_input(INPUT_POST, 'titulo_original', FILTER_SANITIZE_SPECIAL_CHARS);
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
$duracao = filter_input(INPUT_POST, 'duracao', FILTER_SANITIZE_NUMBER_INT);
$ano_lancamento = filter_input(INPUT_POST, 'ano_lancamento', FILTER_SANITIZE_NUMBER_INT);
$cod_genero = filter_input(INPUT_POST, 'cod_genero', FILTER_SANITIZE_NUMBER_INT);
$cod_diretor = filter_input(INPUT_POST, 'cod_diretor', FILTER_SANITIZE_NUMBER_INT);

//salva do BD
$sql = "INSERT INTO filmes (titulo_original, titulo, duracao, ano_lancamento, cod_genero, cod_diretor) VALUES ('$titulo_original', '$titulo', '$duracao', '$ano_lancamento', '$cod_genero', '$cod_diretor')";


$conexao->query($sql);

//redireciona
header('Location: ../index.php?page=filme_lista');
?>