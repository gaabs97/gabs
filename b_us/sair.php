<?php
    session_start();   
    unset(
        $_SESSION['id'],
        $_SESSION['nome'],
        $_SESSION['func']
    );   
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: index.php");
?>