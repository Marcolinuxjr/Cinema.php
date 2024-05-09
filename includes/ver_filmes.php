<?php // arquivo include/ver_filmes.php  
?>
<?php

// pegar o cod do filme da url
$cod = filter_input(INPUT_GET, 'cod_filme', FILTER_SANITIZE_NUMBER_INT);

// montar o sql
$sql = "SELECT * FROM filmes WHERE cod_filme=$cod";
// busca coleção de resultados
$filmes = $conexao->query($sql);
// pega o primeiro filme da seleção
$filme = $filmes->fetch();
// imprimir os resultados
echo "<h1>" . $filme['titulo'] . "</h1>";
echo '<p> Título Original: ' . $filme['titulo_original'] . '</p>';
echo '<p> Lançamento: ' . $filme['ano_lancamento'] . '</p>';
echo '<p> Duração: ' . $filme['duracao'] . 'minutos</p>';
echo '<p> Diretor: ' . '</p>';
echo '<p> Genero: ' . '</p>';
echo '<p><a href="index.php"> Voltar </a></p>';



?>