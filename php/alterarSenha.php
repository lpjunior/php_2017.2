<?php

    include_once './crud_login.php';

    session_start();
    
    $newPass = filter_input(INPUT_POST, 'senhanova', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $oldPass = filter_input(INPUT_POST, 'senhavelha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $id = $_SESSION['logado']['id'];
    
    
    if(alterarSenha($oldPass, $newPass, $id)) {
        header("Location: gerenciar.php"); 
    }
    
    die();