<?php

include('conexao.php');
include('funcoes.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$senhacripto = cripto($senha);

$select = "SELECT login, senha, nome, nivel 
FROM usuario WHERE login = '$login' AND senha = '$senhacripto'";

$query = mysqli_query($con, $select);
$dados = mysqli_fetch_row($query);

if ($login == isset($dados[0]) && $senha == isset($dados[1])) {
    session_start();
    $_SESSION["logado"] = true;
    $_SESSION["nome"] = $dados[2];
    $_SESSION["nivel"] = $dados[3];
    header("Location: principal.php");
} else {
    echo '<script>alert("Usuario ou senha incorretas");
    window.location="index.php";
    </script>';
}

?>