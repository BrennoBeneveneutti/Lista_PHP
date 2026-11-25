<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Análise de string</title></head>
<body>
<p>Como o enunciado não detalha os resultados esperados, este exemplo informa quantidade de caracteres, palavras e vogais.</p>
<form method="post">
    <label>String: <input type="text" name="texto" required></label>
    <button type="submit">Analisar</button>
</form>
<?php
if (isset($_POST["texto"])) {
    $texto = trim($_POST["texto"]);
    $vogais = preg_match_all('/[aeiouáéíóúãõâêîôû]/iu', $texto);

    echo "Texto: " . htmlspecialchars($texto) . "<br>";
    echo "Quantidade de caracteres: " . strlen($texto) . "<br>";
    echo "Quantidade de palavras: " . str_word_count($texto, 0, "ÀÁÉÍÓÚàáéíóú") . "<br>";
    echo "Quantidade de vogais: " . $vogais;
}
?>
</body>
</html>
