<?php

session_start();

$_SESSION['logado'] = false;
$_SESSION['nome'] = null;

session_destroy();

header('Location: index.php');

?>