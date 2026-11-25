<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Sorteio</title></head>
<body>
<form method="post">
    <label>Valor mínimo: <input type="number" name="minimo" required></label><br>
    <label>Valor máximo: <input type="number" name="maximo" required></label><br>
    <button type="submit">Sortear</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $minimo = (int) $_POST["minimo"];
    $maximo = (int) $_POST["maximo"];

    if ($minimo <= $maximo) {
        echo "Número sorteado: " . rand($minimo, $maximo);
    } else {
        echo "O valor mínimo não pode ser maior que o máximo.";
    }
}
?>
</body>
</html>
