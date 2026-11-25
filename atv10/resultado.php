<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Classificação do IMC</title></head>
<body>
<?php
$imc = (float) ($_GET["imc"] ?? 0);

if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
} elseif ($imc < 25) {
    $classificacao = "Peso normal";
} elseif ($imc < 30) {
    $classificacao = "Sobrepeso";
} elseif ($imc < 35) {
    $classificacao = "Obesidade grau I";
} elseif ($imc < 40) {
    $classificacao = "Obesidade grau II";
} else {
    $classificacao = "Obesidade grau III";
}

echo "Classificação: $classificacao<br>";
?>
<a href="index.php">Calcular novamente</a>
</body>
</html>
