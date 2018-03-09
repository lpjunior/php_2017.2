<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <title>Aula 03</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <style>
            .container {
                display: flex;
                justify-content: space-between;
            }

            .container::before, .container::after {
                width: 30px;
                height: 30px;
            }
        </style>
    </head>
    <body>

        <div class="jumbotron text-center">
            <h1>Gerenciamento de Peças</h1>
            <p>Automotivo Ltda</p> 
        </div>

        <div class="container">
            <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12"  align="center">
                <div class="col-sm-6 col-md-4 col-md-offset-2">
                    <div class="thumbnail">
                        <img src="..." alt="...">
                        <div class="caption">
                            <h3>Cadastro</h3>
                            <p><strong>Cadastramento de peças da Automotivo Ltda</strong></p>
                            <p>Antes de efetuar o cadastro de peças, por favor tenha em mãos as informações: código da
                            peça, nome, modelo, ano, fabricante, preço e quantidade.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Cadastrar</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="..." alt="...">
                        <div class="caption">
                            <h3>Registros</h3>
                            <p><strong>Controle de registro de peças da Automotivo Ltda</strong></p>
                            <p>Nesse menu é possível gerenciar as peças cadastradas podendo listar, buscar, editar e excluir.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Gerir</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
