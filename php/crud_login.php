<?php

require_once './conexao.php';

function efetuarLogin($login, $senha) {

    $link = getConnection();
    $query = "select id, nome, login from login where login = '{$login}' and senha = md5('{$senha}')";
    $result = mysqli_query($link, $query);
    $usuario = mysqli_fetch_assoc($result);

    return $usuario;
}

function alterarSenha($senhaVelha, $senhaNova, $id) {

    $link = getConnection();
    $query = "update login set senha = md5('{$senhaNova}') where id = $id and senha = md5('{$senhaVelha}')";

    if (mysqli_query($link, $query)) {
        return true;
    }
    return false;
}
