<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Cadastro no MySQL</title></head>
<body>
<form method="post">
    <label>Nome: <input type="text" name="nome" required></label><br>
    <label>E-mail: <input type="email" name="email" required></label><br>
    <button type="submit">Cadastrar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servidor = "localhost";
    $banco = "lista_php";
    $usuario = "root";
    $senha = "";

    try {
        $pdo = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8", $usuario, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
        $comando = $pdo->prepare($sql);
        $comando->execute([
            "nome" => $_POST["nome"],
            "email" => $_POST["email"]
        ]);

        echo "Usuário cadastrado com sucesso!";
    } catch (PDOException $erro) {
        echo "Erro ao cadastrar: " . $erro->getMessage();
    }
}
?>
</body>
</html>
