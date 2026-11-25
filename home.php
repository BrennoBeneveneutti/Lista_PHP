<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página principal</title>
</head>
<body>
    <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION["usuario"]); ?>!</p>
    <a href="logout.php">Sair</a>
</body>
</html>