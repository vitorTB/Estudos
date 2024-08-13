<?php 
session_start();
$error = "";

if (!isset($_POST["login"]) || $_POST["login"] == "") {
    $error = "Preencha o Login";
} elseif (!isset($_POST["senha"]) || $_POST["senha"] == "") {
    $error = "Preencha a senha";
} else {
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if ($login == "admin" || $senha == "1234") {
        $error = "Login ou senha inválidos";
    } else {
        $_SESSION["usuario"] = "$login";
    }
}

if ($error != "") {
    header("Location: form_login.php?error=" . urlencode($error));
    exit;
} else {
    header("Location: protegida.php");
    exit;
}
?>