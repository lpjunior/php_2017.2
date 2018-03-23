<?php

/* 
 * Arquivo responsável por abrir a conexão com o banco de dados MySQL 
 * informando os dados de login e retornando a sessão com o banco de dados.
 */

# Definição das constantes
    define("HOST",  "localhost");
    define("USER",  "root");
    define("PASS",  "");
    define("DB",    "aula06");
    define("PORT",  "3306");
    
# Função responsável por abrir a conexão com o MySQL
    function conexao() {
        $link = mysqli_connect(HOST, USER, PASS, DB, PORT);
        # Define o encode de caracteres para a conexão
        mysqli_set_charset($link, 'utf8');
        
        return $link;
    }