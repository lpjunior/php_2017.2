<?php

/* 
 * Arquivo responsável por abrir a conexão com o banco de dados MySQL 
 * informando os dados de login e retornando a sessão com o banco de dados.
 */

    define("HOST",  "localhost");
    define("USER",  "root");
    define("PASS",  "");
    define("DB",    "aula06");
    define("PORT",  "3306");
    
    function conexao() {
        $link = mysqli_connect(HOST, USER, PASS, DB, PORT);
        mysqli_set_charset($link, 'utf8');
        
        return $link;
    }