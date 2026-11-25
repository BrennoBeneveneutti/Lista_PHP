<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header('Location: login.php');
        exit();
    }
    echo "Bem-vindo, " . htmlspecialchars($_SESSION['usuario']) . "!<br>";
    echo "<br>Usuario: " . htmlspecialchars($_SESSION['usuario']) . "<br>";
    echo "Senha: " . htmlspecialchars($_SESSION['senha']) . "<br>";