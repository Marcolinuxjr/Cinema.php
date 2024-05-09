<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-danger" aria-current="page" href="index.php?page=filme_lista"><i class="bi bi-camera-reels-fill"></i>Filmes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php?page=genero_lista"><i class="bi bi-film"></i>Gêneros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php?page=atores_lista"><i class="bi bi-person-square"></i>Atores<a>
        </li>
        <?php
        session_start();
        if(!isset($_SESSION['cod'])){
          echo '<li class="nav-item">';
          echo '<a class="nav-link text-light" href="index.php?page=login"><i class="bi bi-list-check"></i>login</a>';
          echo '</li>';
        }   
        ?>
      </ul>
    </div>
  </div>
</nav>
    <main>
      <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      #importar a conexao
      require_once 'includes/conexao.php';
      # selecionar página a ser incorporada
      /* $page = filter_input(INPUT_GET, 'page');
      switch($page){
        case "listafilmes":
            require_once 'includes/filme_lista.php';
            break;
        case "verfilme":
            require_once 'includes/filme_ver.php';
            break;
        default:
            require_once 'includes/filme_lista.php';
      }*/

      #importar lista de filmes
      # require_once 'includes/filme_lista.php';
      $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);
      if(file_exists("includes/$page.php")){
        require "includes/$page.php";
      } else{
        require 'includes/filme_lista.php';
      }
      
      ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>