<?php

# inclusão do arquivo que abre a conexão com o banco de dados
require_once './conexao.php';

/* 
 * Arquivo responsável por fazer as transações com o banco de dados
 */

# Função responsável por gravar os dados no banco
function gravar($codigo, $nome, $modelo, $ano, $fabricante, $preco, $quantidade) {
    
    #recebe a conexão aberta
    $link = conexao();
    
    # Query SQL para inserção dos dados
    $query = "insert into produto values (null, '{$codigo}', '{$nome}', '{$modelo}', {$ano}, '{$fabricante}', {$preco}, {$quantidade})";
    
    if(mysqli_query($link, $query)) {
        return true;
    }
    return false;
}

# Função responsável por ler os dados gravados no banco
function listar() {
    
    $link = conexao();
    
    $query = "select * from produto";
    
    # Recebe o resultado da consulta ao banco de dados;
    $result = mysqli_query($link, $query);
    
    
    # define um array de produtos
    $produtos = array();
    
    while ($produto = mysqli_fetch_assoc($result)) {
        array_push($produtos, $produto);
    }
    
    return $produtos;
}