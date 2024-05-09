<?php
    //pegar cod do filme da url
    $cod = filter_input(INPUT_GET,'cod_filme', FILTER_SANITIZE_NUMBER_INT);
    #monta o sql
    $sql = "SELECT * FROM filmes WHERE cod_filme=$cod";
    #busca a coleçao de resultados
    $filmes = $conexao->query($sql);
    # pega o primeiro filme da coleçao
    $filme = $filmes->fetch();
    //imprimir infos

    echo "<h1>".$filme['titulo']."</h1>";
    echo "<section>";
    echo '<p>Titulo original: '.$filme['titulo_original'].'</p>';
    echo '<p>Lançamento: '.$filme['ano_lancamento'].'</p>';
    echo '<p>Duraçao: '.$filme['duracao'].' minutos</p>';
    echo '<p>Diretor: </p>';
    echo '<p>Gênero: </p>';
    echo '<p><a href="index.php">voltar</a></p>';
    echo "</section>";
    ?>