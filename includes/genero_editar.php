<?php
#pega o id da URL
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM generos WHERE cod_genero=$id";
$generos = $conexao->query($sql);
# pega o primeiro resultado
$genero = $generos->fetch();
if(!$genero){
    header('Location: index.php?page=genero_lista');
}
?>
<h1>Editar Gênero</h1>
<form action="includes/genero_editarbd.php" method="post">
    <div class="mb-3">
        <label for="nome_genero" class="form-label">
            Nome do gênero: 
        </label>
        <input class="form-control" type="text" 
            value="<?=$genero['nome_genero']?>" name="nome_genero" id="nome_genero" required>
        <input type="hidden" name="cod_genero" value="<?=$id?>">
    </div>
    <div class="mb-3">
        <input type="submit" value="Salvar">
    </div>
</form>