<?php

session_start();
$nome = $_SESSION['nome'];
$nivel = $_SESSION['nivel'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    Bem-Vindo(a), <?php echo $nome ?> <br> <br>
    
    <a href="logout.php">Sair</a> <br> <br>

    <!--
    <iframe width="560" height="315" 
    src="https://www.youtube.com/embed/73pfzPVJq1g?si=cNub8XbfFZQpKFan" 
    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
    clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    
    <h1>NUOSSA, QUE PINTO ENORME</h1>
    
    <img src="./maxresdefault.jpg" alt="Imagem" width="500px" height="500px">
    -->
</body>
</html>