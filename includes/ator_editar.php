<?php
#pega o id da URL
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM atores WHERE cod_ator=$id";
$generos = $conexao->query($sql);
# pega o primeiro resultado
$genero = $generos->fetch();
if(!$genero){
    header('Location: index.php?page=atores_lista');
}
?>
<h1>Editar Ator</h1>
<form action="includes/ator_editarbd.php" method="post">
    <div class="mb-3">
        <label for="nome_ator" class="form-label">
            Nome do Ator: 
        </label>
        <input class="form-control" type="text" 
            value="<?=$genero['nome_ator']?>" name="nome_ator" id="nome_ator" required>
        <input type="hidden" name="cod_ator" value="<?=$id?>">
    </div>
    <div class="mb-3">
        <input type="submit" value="Salvar">
    </div>
</form>