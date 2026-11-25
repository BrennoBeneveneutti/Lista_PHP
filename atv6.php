<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Par ou Ímpar</title></head>
<body>
<form method="post">
    <label>Número: <input type="number" name="numero" required></label>
    <button type="submit">Verificar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = (int) $_POST["numero"];
    $resultado = ($numero % 2 === 0) ? "Par" : "Ímpar";
    echo "O número $numero é $resultado.";
}
?>
</body>
</html>
