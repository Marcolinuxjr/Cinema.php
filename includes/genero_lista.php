<?php
#arquivo incluides/genero_lista.php
?>
  <h1>Gêneros</h1>
        </li>
        <?php
            if(isset($_SESSION['cod'])){
                echo '<a class=" mb-3 text-success" href="index.php?page=genero_cadastrar"><i class="bi bi-plus-circle-dotted"></i>Cadastrar Gênero</a>';
            }
            //faz a consulta
            $sql ="SELECT * FROM generos ORDER BY nome_genero";
            $generos = $conexao->query($sql);

            //mostrar os resultados
            echo '<ul class="list-group">';
            foreach($generos as $g){
                echo '<li class="list-group-item text-success text-justify">';
                echo $g['nome_genero'];
                if(isset($_SESSION['cod'])){
                    echo '<a class="ms-3 float-end text-danger" href="includes/genero_apagar.php?id='.$g['cod_genero'].'"><i class="bi bi-trash3-fill"></i></a>';
                    echo '<a class="ms-3 float-end text-" href="index.php?page=genero_editar&id='.$g['cod_genero'].'"><i class="bi bi-pencil-fill"></i></i></a>';
                }
                echo '</li>';
            }
            echo '</ul>';
        ?>
    