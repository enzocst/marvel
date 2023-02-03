<?php
    session_start(); 
//apagar a sessão iniciada	
    unset(
        $_SESSION['login']
    );    
    //redirecionar o usuario para a página de login
    header("Location: loginmarvel.php");
?>