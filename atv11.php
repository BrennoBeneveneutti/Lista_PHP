<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Intervalo</title>
    <style>
        .numero {
            display: inline-block;
            margin: 4px;
            padding: 6px;
            background: #dddddd;
        }
    </style>
</head>
<body>
<form method="post">
    <label>Número inicial: <input type="number" name="inicio" required></label><br>
    <label>Número final: <input type="number" name="fim" required></label><br>
    <button type="submit">Exibir intervalo</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $inicio = (int) $_POST["inicio"];
    $fim = (int) $_POST["fim"];

    $passo = ($inicio <= $fim) ? 1 : -1;

    for ($i = $inicio; ($passo === 1) ? $i <= $fim : $i >= $fim; $i += $passo) {
        echo '<span class="numero">' . $i . '</span>';
    }
}
?>
</body>
</html>
