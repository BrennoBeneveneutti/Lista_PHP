<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Randomize</title></head>
<body>
<?php
$max = 100;
$min = 1;
function randomNumber() {
    $randomizer = new Randomizer();
    $numero = $randomizer->getInt(1, 100);
    return $numero;
}

function randomize(){
    echo rand(1, 100);
}
randomize();
?>
</body>
</html>
