<?php
include('validaLogado.php');
$nivel = $_SESSION['nivel'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="dados.php"> Meu cadastro </a> |

<?php if($nivel < 2){ ?>
<a href="cadastro.php">Novo usuário</a> | 
<?php }?>

<a href="logout.php">Sair</a>

    
</body>
</html>