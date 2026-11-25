<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Triângulo</title></head>
<body>
<form method="post">
    <label>Lado A: <input type="number" step="any" name="a" required></label><br>
    <label>Lado B: <input type="number" step="any" name="b" required></label><br>
    <label>Lado C: <input type="number" step="any" name="c" required></label><br>
    <button type="submit">Classificar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = (float) $_POST["a"];
    $b = (float) $_POST["b"];
    $c = (float) $_POST["c"];

    if ($a <= 0 || $b <= 0 || $c <= 0) {
        echo "Os lados devem ser maiores que zero.";
    } elseif ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        echo "Os valores não formam um triângulo.";
    } elseif ($a === $b && $b === $c) {
        echo "Triângulo equilátero.";
    } elseif ($a === $b || $a === $c || $b === $c) {
        echo "Triângulo isósceles.";
    } else {
        echo "Triângulo escaleno.";
    }
}
?>
</body>
</html>
