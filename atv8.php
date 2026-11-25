<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Soma de números</title></head>
<body>
<form method="post">
    <label>Números separados por espaço ou vírgula:<br>
        <input type="text" name="numeros" required>
    </label>
    <button type="submit">Somar</button>
</form>
<?php
if (isset($_POST["numeros"])) {
    $numeros = str_replace(",", " ", $_POST["numeros"]);
    $lista = array_filter(explode(" ", $numeros), function ($valor) {
        return trim($valor) !== "";
    });

    $soma = 0;
    foreach ($lista as $numero) {
        $soma += (float) trim($numero);
    }

    echo "Soma: $soma";
}
?>
</body>
</html>
