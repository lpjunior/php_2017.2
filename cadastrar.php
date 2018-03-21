<?php

#inclusão do arquivo C.R.U.D
require_once './crud.php';

/* 
 * Arquivo responsável por receber a requisição de cadastro da página formulário.php
 */

# RESGATAR OS CAMPOS DO FORMULÁRIO
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$modelo = $_POST['modelo'];
$ano = substr($_POST['ano'], 0, 4);
$fabricante = $_POST['fabricante'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

/*
    echo  "Código: $codigo <br>"
        . "Nome: $nome <br>"
        . "Modelo: $modelo <br>"
        . "Ano: $ano <br>"
        . "Fabricante: $fabricante <br>"
        . "Preço: $preco <br>"
        . "Quantidade:  $quantidade";
*/
if(isset($_POST['nome'])) {
    if(gravar($codigo, $nome, $modelo, $ano, $fabricante, $preco, $quantidade)){
        echo 'Dados gravados com sucesso';
    } else {
        echo 'Falha ao gravar os dados';
    }
}