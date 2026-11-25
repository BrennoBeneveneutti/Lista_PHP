<?php
    if (isset($_POST['usuario'])) {
        header('Location: login.php');
        exit();
    }
    $_SESSION['usuario'] = 'usuario';
    $_SESSION['senha'] = 'senha';

    header('Location: home.php');
    
?>