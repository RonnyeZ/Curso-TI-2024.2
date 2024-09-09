<?php

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

if ($login == "admin" && $senha == "admin") {
    session_start();
    $_SESSION["logado"] == true;
    $_SESSION["nome"] = "Admnistrador";
    $_SESSION["nivel"] = 1;

    header("Location: principal.php");

} else {
    echo '<script>alert("Usuario ou senha incorretas");
    window.location="index.php";
    </script>';
}

?>