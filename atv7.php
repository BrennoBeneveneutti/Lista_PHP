<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Tabuada</title></head>
<body>
<form method="post">
    <label>Número: <input type="number" name="numero" required></label>
    <button type="submit">Mostrar tabuada</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = (int) $_POST["numero"];
    echo "Tabuada do $numero:<br>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
}
?>
</body>
</html>
