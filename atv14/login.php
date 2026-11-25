<?php
session_start();

$usuarioCorreto = "admin";
$senhaCorreta = "1234";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"] ?? "";
    $senha = $_POST["senha"] ?? "";

    if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
        $_SESSION["usuario"] = $usuario;
        header("Location: principal.php");
        exit;
    } else {
        $erro = "Usuário ou senha inválidos.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Login</title></head>
<body>
<form method="post">
    <label>Usuário: <input type="text" name="usuario" required></label><br>
    <label>Senha: <input type="password" name="senha" required></label><br>
    <button type="submit">Entrar</button>
</form>
<?php if (isset($erro)) echo $erro; ?>
</body>
</html>
