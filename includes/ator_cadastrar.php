<h1>Ator Cadastrar</h1>

<form action="includes/ator_cadastrarbd.php" method="post">
    <div class="mb-3">
        <label for="nome_genero" class="form-label">
            Nome do Ator:
        </label>
        <input class="form-control" type="text" name="nome_ator" id="nome_ator" required>
    </div>
    <div class="mb-3">
        <input type="submit" value="Salvar">
    </div>
</form>

<?php
require "conexao.php";
