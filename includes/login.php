<?php
$erro = filter_input(INPUT_GET, 'erro');
$erromsg = '';
if($erro==1){
    $erromsg = 'E-mail não cadastrado';
}
elseif($erro==2){
    $erromsg = 'Senha não confere!';
}
if($erromsg){
    echo '<div class="alert alert-danger">';
    echo $erromsg;
    echo '</div>';
}
?>


<form action="includes/loginbd.php" method="post">
    <div class="md-3">
        <label for="email">E-mail</label>
        <input class="form-control border-warning" type="email" name="email" id="email">
    </div>
    <div class="md-3">
        <label for="senha">Senha</label>
        <input class="form-control border-warning" type="password" name="senha" id="senha">
    </div>
    <div class="md-3">
        <input class="bg-dark text-warning rounded mt-3" type="submit" value="Entrar">
    </div>
    <div class="md-3 mt-3">
        <p>
            <a class="text-decoration-none" href="index.php?page=usuario_cadastrar">Cadastre-se</a>
        </p>
    </div>
</form>