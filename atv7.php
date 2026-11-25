<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Número: <input type="number" name="numero" required></label>
    <button type="submit">Mostrar tabuada</button>
</form>
<?php
if (isset($_POST["numero"])) {
    $numero = (int) $_POST["numero"];
    echo "Tabuada do $numero:<br>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
}
?>
</body>
</html>
