<?php

session_start();
include('validaLogado.php');
$nome = $_SESSION['nome'];
$nivel = $_SESSION['nivel'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    Bem-Vindo(a), <?php echo $nome ?> <br> <br>

    <?php
        include('menu.php')
    ?>

</body>
</html>