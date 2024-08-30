<?php

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

if ($login == "admin" && $senha == "admin") {
    echo("LOGADO");

} else {
    echo("ERROU PARÇA, TENTA DNV AI");
}

?>