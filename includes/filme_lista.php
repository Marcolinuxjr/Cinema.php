<?php
#arquivo incluides/filme_lista.php
?>
  <h1>Filmes</h1>
        <form action="" method="get">
            <input type="search" name="pesquisa" id="pesquisa" placeholder="Digite o título...">
            <input type="submit" value="Pesquisar">
            <div class="mb-3">
            <label for="cod_genero" class="form-label" id="gn">
               <h2>Genero:</h2> 
            </label>

            <select class="form-select" name="cod_genero" id="cod_genero">
                <?php
                $generos = $conexao->query('SELECT * FROM generos');
                foreach($generos as $g){
                    echo '<option value="'.$g['cod_genero'].'">';
                        echo $g['nome_genero'];
                    echo '</option>';
                }
                ?>
            </select>
        </form>
        <?php
            if(isset($_SESSION['cod'])){
                echo '<a class=" text-success" href="index.php?page=filme_cadastrar"><i class="bi bi-plus-circle-dotted"></i>Cadastrar Filme</a>';
            }
            //capturar o valor enviado pela pesquisa
            $p = filter_input(INPUT_GET, 'pesquisa', FILTER_SANITIZE_SPECIAL_CHARS);
            if($p){
                echo "Pesquisado por $p...";
            }

            $cg = filter_input(INPUT_GET, 'cod_genero', FILTER_SANITIZE_SPECIAL_CHARS);
            //faz a consulta
            $sql ="SELECT * FROM filmes WHERE titulo LIKE '%$p%' AND filmes.cod_genero = $cg ORDER BY titulo";
            $filme = $conexao->query($sql);

            //mostrar os resultados
            echo '<ul class="list-group">';
            foreach($filme as $f){
                echo '<li class="list-group-item">';
                echo '<a href="index.php?page=filme_ver&cod_filme='.$f['cod_filme'].'">';
                echo $f['titulo']. ' - '.$f['ano_lancamento'];
                echo '</a>';
                if(isset($_SESSION['cod'])){
                    echo '<a class="ms-3 float-end text-danger" href="includes/filme_apagar.php?id='.$f['cod_filme'].'"><i class="bi bi-trash3-fill"></i></a>';
                    echo '<a class="ms-3 float-end text-" href="index.php?page=filme_editar&id='.$f['cod_filme'].'"><i class="bi bi-pencil-fill"></i></i></a>';
                }
                echo '</li>';
            }
            echo '</ul>';
        ?>

<?php # arquivo includes/filme_lista.php ?>
