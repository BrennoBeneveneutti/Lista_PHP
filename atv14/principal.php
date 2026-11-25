<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Página principal</title></head>
<body>
<p>Usuário <?php echo htmlspecialchars($_SESSION["usuario"]); ?> está logado.</p>
<a href="logout.php">Sair / quebrar sessão</a>
</body>
</html>
