<?php
session_start();

$usuarioCorreto = "admin";
$senhaCorreta = "1234";

if (isset($_POST["usuario"], $_POST["senha"])) {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["senha"] = $senha;
        header("Location: home.php");
        exit;
    }
}

header("Location: login.php?erro=1");
exit;
?>