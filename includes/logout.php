<?php
#session_start();
session_destroy();
?>

<h1>Usuário deslogado</h1>
<script>
    setTimeout(() => {
        window.location.href = "index.php";
    }, 3000);

</script>