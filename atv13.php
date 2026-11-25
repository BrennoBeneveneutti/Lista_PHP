<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Exercício com array</title></head>
<body>
<h2>Exemplo com array de números</h2>
<?php
$numeros = [10, 25, 7, 42, 18];

echo "Soma: " . array_sum($numeros) . "<br>";
echo "Maior número: " . max($numeros) . "<br>";
echo "Menor número: " . min($numeros);
?>
</body>
</html>
