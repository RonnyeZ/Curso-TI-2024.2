<?php

include('conexao.php');
include('funcoes.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$senhacripto = cripto($senha);

$select = "SELECT login, senha, nome, nivel 
FROM usuario WHERE login = '$login' AND senha = '$senhacripto'";

if ($login == "admin" && $senha == "admin") {
    session_start();
    $_SESSION["logado"] = true;
    $_SESSION["nome"] = "Administrador";
    $_SESSION["nivel"] = 1;
    header("Location: principal.php");
} else {
    echo '<script>alert("Usuario ou senha incorretas");
    window.location="index.php";
    </script>';
}

?>