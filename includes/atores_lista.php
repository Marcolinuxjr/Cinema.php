<?php
#arquivo incluides/genero_lista.php
?>
  <h1>Atores</h1>
        <?php
            if(isset($_SESSION['cod'])){
                echo '<a class=" text-success" href="index.php?page=ator_cadastrar"><i class="bi bi-plus-circle-dotted"></i> Cadastrar Ator<a>';
            }
            //faz a consulta
            $sql ="SELECT * FROM atores ORDER BY nome_ator";
            $atores = $conexao->query($sql);

            //mostrar os resultados
            echo '<ul class="list-group">';
            foreach($atores as $a){
                echo '<li class="list-group-item  text-success text-justify">';
                echo $a['nome_ator'];
                if(isset($_SESSION['cod'])){
                    echo '<a class="ms-3 float-end text-danger" href="includes/ator_apagar.php?id='.$a['cod_ator'].'"><i class="bi bi-trash3-fill"></i></a>';
                    echo '<a class="ms-3 float-end text-" href="index.php?page=ator_editar&id='.$a['cod_ator'].'"><i class="bi bi-pencil-fill"></i></i></a>';
                }
                echo '</li>';
            }
            echo '</ul>';
        ?>