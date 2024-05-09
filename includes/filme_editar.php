<?php
//pega o id da url
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM filmes WHERE cod_filme=$id";
$filmes = $conexao->query($sql);
$filme = $filmes->fetch();//pega o primeiro resultado
//se não encontrar o genero no BD, redireciona para a lista
if(!$filme){
    header('Location: index.php?page=filme_lista');
}
?>

<h1>Editar Filme</h1>
<form action="includes/filme_editarbd.php" method="post">
    <div class="mb-3">
        <label for="titulo" class="form-label text-light">
            Nome do filme:
        </label>
        <input class="form-control" type="text" value="<?=$filme['titulo']?>" name="titulo" id="titulo" required></input>
        <input type="hidden" name="cod_filme" value="<?=$id?>">
    </div>
    <div class="mb-3">
        <input class="bg-dark text-warning rounded" type="submit" value="Salvar">
    </div>
</form>