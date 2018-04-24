<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    die();
} else {
    $usuario = $_SESSION['logado'];
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
        <style>
            .container {

                padding: 0;
                margin: 0;
                widht: 100%;
                height: 100%;
                min-height: 800px;
                background-color: #fff;

            }

            #layout { 

                width: 100%;
                height: 100%;
                min-height: 800px;

            }

            #layout td {

                vertical-align: top;
                border: 1px solid #e7e7e7;

            }

            #layout tr:nth-child(1) td:nth-child(1) {

                padding: 20px;
                width: 250px;
                height: 100%;
                background-color: #f0f0f0;
                border-right: 1px solid #e7e7e7;

            }

            #layout tr:nth-child(1) td:nth-child(2) {

                background-color: #fff;
                height: 100%;

            }

            .typeContainer {

                padding: 20px;
                min-height: 100px;
                width: 100%;
                background-color: #fff;
                border-bottom: 1px solid #e7e7e7;

            }

            .typeHeader {

                color: #7f7f7f;
                text-transform: uppercase;
                font-size: 10pt;

            }

            .itemContainer {

                width: 220px;
                padding: 10px;
                height: 80px;
                display: inline-block;
                background-color: #fff;
                margin-top: 10px;
                margin-bottom: 10px;

            }

            .itemConnected {

                color: #3c763d;
                background-color: #dff0d8;
                border: 1px solid #d6e9c6;
                border-radius: 6px;

            }

            .itemAttempting {

                color: #b8823b;
                background-color: #fcf8e3;
                border: 1px solid #faebcc;
                border-radius: 6px;

            }

            .itemNotConnected {

                color: #b84442;
                background-color: #f2dede;
                border: 1px solid #ebccd1;
                border-radius: 6px;

            }

            .itemLinks {

                color: #425bb8;
                background-color: #ddeaef;
                border: 1px solid #ebccd1;
                border-radius: 6px;

            }

            .itemHostname {

                text-align: center;
                font-weight: bold;
                font-size: 10pt;

            }

            .itemSummary {

                text-align: center;
                font-size: 8pt;

            }

            .itemStatus {

                background-color: #fff;
                text-align: center;
                font-size: 8pt;
                border-radius: 3px;
                border: 1px solid #e7e7e7;
                border-bottom: 1px solid #d3d3d3;
                border-top: 1px solid #fff;

            }

            .fa-check {

                color: #3c763d;

            }

            .fa-remove {

                color: #af4442;  

            }

            .panel-heading {

                padding: 8px!important;

            }

            .panel-body {

                padding: 8px!important;

            }


        </style>
    </head>
    <body>
        <div class="container-fluid" style="margin-top: 2%">
            <table id="layout">
                <tr>
                    <td>
                        <h1 align="center">Bem Vindo <?= $usuario['nome'] ?></h1>
                        <p align="center"><a href="#" data-target="#modalSenha" data-toggle="modal">Alterar Senha</a>
                        <p align="center"><a href="deslogar.php">Deslogar</a>
                    </td>
                <div class="row">
                    <td>
                        <div class="typeContainer">
                            <div class="typeHeader"><span class="fa fa-comments"></span> Contatos</div>
                            <div class="itemContainer">
                                <div class="itemConnected">
                                    <!-- Default panel contents -->
                                    <div class="panel-heading">
                                        <div class="itemHostname">Contatos</div>
                                        <div class="itemSummary">Verifique todos os contatos feitos na página</div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="itemStatus"><a href="list_contato.php">Checar </a><span class="fa fa-spin fa-envelope-o"></span></div>
                                    </div>
                                </div>
                            </div>  
                        </div>

                        <div class="typeContainer">
                            <div class="typeHeader"><span class="fa fa-file-word-o"></span> Conteúdo Textual</div>
                            <div class="itemContainer">
                                <div class="itemAttempting">
                                    <!-- Default panel contents -->
                                    <div class="panel-heading">
                                        <div class="itemHostname">Textos</div>
                                        <div class="itemSummary">Edite os textos do seu site</div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="itemStatus">Alterar.. <span class="fa fa-pencil-square-o"></span></div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="typeContainer">
                            <div class="typeHeader"><span class="fa fa-image"></span> Conteúdo Visual</div>
                            <div class="itemContainer">
                                <div class="itemNotConnected">
                                    <!-- Default panel contents -->
                                    <div class="panel-heading">
                                        <div class="itemHostname">Imagens</div>
                                        <div class="itemSummary">Mude e de nova vida no site com novas imagens</div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="itemStatus">Modificar <span class="fa fa-pencil-square-o"></span></div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="typeContainer">
                            <div class="typeHeader"><span class="fa fa-link"></span> Links</div>
                            <div class="itemContainer">
                                <div class="itemLinks">
                                    <!-- Default panel contents -->
                                    <div class="panel-heading">
                                        <div class="itemHostname">Navigation Links</div>
                                        <div class="itemSummary">Gerencie seus links de navegação</div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="itemStatus">Editar <span class="fa fa-pencil-square-o"></span></div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </td>  
                </div>     
                </tr>
            </table>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="modalSenha">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Alterar Senha</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <fieldset>
                            <form id="formSenha" method="post" action="alterarSenha.php">
                                <div class="form-group">
                                    <label for="newPass">Nova Senha</label>
                                    <input type="password" name="senhanova" id="newPass" class="form-contol" required>
                                </div>
                                <div class="form-group">
                                    <label for="oldPass">Senha Atual</label>
                                    <input type="password" name="senhavelha" id="oldPass" class="form-contol" required>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" form="formSenha" class="btn btn-primary">Alterar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
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