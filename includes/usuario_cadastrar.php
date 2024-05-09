<h1>Cadastro de usuário</h1>
<?php
$erro = filter_input(INPUT_GET, 'erro');
$erromsg = '';
if($erro==1){
    $erromsg = 'Usuário já cadastrado';
}
elseif($erro==2){
    $erromsg = 'Senhas digitadas não conferem';
}
if($erromsg){
    echo '<div class="alert alert-danger">';
    echo $erromsg;
    echo '</div>';
}
?>

<form action="includes/usuario_cadastrarbd.php" method="post">
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input class="form-control border-warning" type="email" name="email" id="email" required>
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input class="form-control border-warning" type="password" name="senha" id="senha" required>
    </div>
    <div class="mb-3">
        <label for="senha2">Confirmar senha</label>
        <input class="form-control border-warning" type="password" name="senha2" id="senha2" required>
    </div>
    <div class="mb-3">
        <input class="" type="submit" value="Salvar">
    </div>
</form>