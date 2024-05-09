<?php
try {
    $user = 'root';
    $senha = '';
    $bd = 'filmes';
    $conexao = new \PDO('mysql:host=localhost; dbname='.$bd, $user, $senha);

} catch (\PDOExeptiom $e) {
    file_put_contents("log.txt", $e->getMassage(), FILE_APPEND | LOCK_EX );
    echo '<div class="alert alert-danger">Ops, Houve um ERRO no site!</div>';
}

