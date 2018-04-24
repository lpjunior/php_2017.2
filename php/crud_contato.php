<?php

require_once './conexao.php';

# função para listar todos os contatos
function getContatos() {
    # definir a variavel de conexao
    $link = getConnection();
    # query de consulta(lista) para a tabela
    $query = "select * from contact";
    # envio da query e recebimento do resultado
    $result = mysqli_query($link, $query);
    # definir lista(array) de contatos
    $contactList = array();
    # carregar o array com os dados do banco
    while($contact = mysqli_fetch_assoc($result)) {
        # insere o resultado no array
        array_push($contactList, $contact);
    }
    # retorna o array carregado com os contatos
    return $contactList;
}

# função para listar um  contato especifico
function getContato($id) {
    # definir a variavel de conexao
    $link = getConnection();
    # query de consulta(lista) para a tabela
    $query = "select * from contact where id = $id";
    # envio da query e recebimento do resultado
    $result = mysqli_query($link, $query);
    # carregar a variavel com os dados do banco
    $contact = mysqli_fetch_assoc($result);
    # retorna o contato carregado com os dados
    return $contact;
}

# função para listar um  contato especifico
function getContatoEmail($email) {
    # definir a variavel de conexao
    $link = getConnection();
    # query de consulta(lista) para a tabela
    $query = "select * from contact where contact_email like '{$email}'";
    # envio da query e recebimento do resultado
    $result = mysqli_query($link, $query);
    # carregar a variavel com os dados do banco
    $contact = mysqli_fetch_assoc($result);
    # retorna o contato carregado com os dados
    return $contact;
}

# função para gravar um contato
function setContato($name, $email, $message) {
    $link = getConnection();
    
    $query = "insert into contact values(null, '{$name}', '{$email}', '{$message}')";
    
    if(mysqli_query($link, $query)) {
        return true;
    }
    return false;
}

# função para atualizar um contato
function atualizaContato($id, $name, $email, $message) {
    $link = getConnection();
    
    $query = "update contact set contact_name = '{$name}', contact_email = '{$email}', contact_message = '{$message}' where id = $id";
    
    if(mysqli_query($link, $query)) {
        return true;
    }
    return false;
}

# função para excluir um contato
function excluiContato($id) {
    $link = getConnection();
    
    $query = "delete from contact where id = $id";
    
    if(mysqli_query($link, $query)) {
        return true;
    }
    return false;
}