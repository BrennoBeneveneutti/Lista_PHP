<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="start.php" method="post">
        <label>Usuário: <input type="text" name="usuario" required></label><br>
        <label>Senha: <input type="password" name="senha" required></label><br>
        <button type="submit">Login</button>
    </form>

    <?php
    if (isset($_GET["erro"])) {
        echo "<p>Usuário ou senha incorretos.</p>";
    }
    ?>
</body>
</html>