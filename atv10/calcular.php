<?php
$peso = (float) ($_POST["peso"] ?? 0);
$altura = (float) ($_POST["altura"] ?? 0);

if ($peso <= 0 || $altura <= 0) {
    header("Location: index.php");
    exit;
}

$imc = $peso / ($altura * $altura);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Resultado do IMC</title></head>
<body>
<p>Seu IMC é <strong><?php echo number_format($imc, 2, ",", "."); ?></strong>.</p>
<a href="resultado.php?imc=<?php echo urlencode($imc); ?>">Ver classificação</a>
</body>
</html>
