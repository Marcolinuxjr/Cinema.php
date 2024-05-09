<form action="includes/filme_cadastrarbd.php" method="post">
    <div class="mb-3 mt-3">
        <label for="titulo_original" class="form-label text-light">
            Título Original:
        </label>
        <input class="form-control border-warning" type="text" name="titulo_original" id="titulo_original" required></input>
    </div>

    <div class="mb-3">
        <label for="titulo" class="form-label text-light">
            Título:
        </label>
        <input class="form-control border-warning" type="text" name="titulo" id="titulo" required></input>
    </div>

    <div class="mb-3">
        <label for="duracao" class="form-label text-light">
            Duração:
        </label>
        <input class="form-control border-warning" type="text" name="duracao" id="duracao" required></input>
    </div>

    <div class="mb-3">
        <label for="ano_lancamento" class="form-label text-light">
            Ano de Lançamento:
        </label>
        <input class="form-control border-warning" type="text" name="ano_lancamento" id="ano_lancamento" required></input>
    </div>

    <div class="mb-3">
        <label for="cod_genero" class="form-label text-light">
            Gênero:
        </label>
       <select class="form-select border-warning" name="cod_genero" id="cod_genero">
            <?php
            $generos = $conexao->query('SELECT * FROM generos ORDER BY nome_genero');
            foreach($generos as $g){
                echo '<option value="'.$g['cod_genero'].'">';
                echo $g['nome_genero'];
                echo '</option>';
            }
            ?>
       </select>
    </div>

    <div class="mb-3">
        <label for="cod_diretor" class="form-label text-light">
            Diretor:
        </label>
       <select class="form-select border-warning" name="cod_diretor" id="cod_diretor">
            <?php
            $diretores = $conexao->query('SELECT * FROM diretores ORDER BY nome_diretor');
            foreach($diretores as $d){
                echo '<option value="'.$d['cod_diretor'].'">';
                echo $d['nome_diretor'];
                echo '</option>';
            }
            ?>
       </select>
    </div>
    <!--botao de submit-->
    <div class="mb-3">
        <input class="bg-dark text-warning rounded" type="submit" value="Salvar">
    </div>
</form>