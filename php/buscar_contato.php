<?php
include_once './crud_contato.php';
session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    die();
}
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <title>Área Restrita!</title>
    </head>
    <body>
        <div class="container col-md-8 offset-2" style="margin-top: 2%" align="center">
            <td>
                <h1 align="center">Bem Vindo <?= $_SESSION['logado']['nome'] ?></h1>
                <p align="center"><a href="deslogar.php">Deslogar</a>
            </td>
            <div class="row">
                <div class="col-6 offset-3">
                    <fieldset>
                        <legend>Localizar contato</legend>
                        <form action="detail_contato.php" method="post">
                            <div class="form-group col-6">
                                <label for="id_mail">E-mail</label>
                                <input id="id_mail" name="email" class="form-control" placeholder="Informe o email" required>
                            </div>
                            <button type="submit" class="btn btn-warning">Buscar</button>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>