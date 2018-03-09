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

        <div class="container-fluid">
            <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12"  align="center">
                <div class="jumbotron col-md-offset-3 col-md-6">
                    <fieldset>
                        <legend>Formulário</legend>
                    <form>
                        <div class="form-group">
                            <label for="id_codigo">Código da Peça</label>
                            <input type="text" class="form-control" id="id_codigo" name="codigo" placeholder="Código da Peça">
                        </div>
                        <div class="form-group">
                            <label for="id_nome">Nome da Peça</label>
                            <input type="text" class="form-control" id="id_nome" name="nome" placeholder="Nome da Peça">
                        </div>
                        <div class="form-group">
                            <label for="id_modelo">Modelo da Peça</label>
                            <input type="text" class="form-control" id="id_modelo" name="modelo" placeholder="Modelo da Peça">
                        </div>
                        <div class="form-group">
                            <label for="id_ano">Ano da Peça</label>
                            <input type="month" class="form-control" id="id_ano" name="ano" placeholder="Ano da Peça">
                        </div>
                        <div class="form-group">
                            <label for="id_fabricante">Fabricante da Peça</label>
                            <input type="text" class="form-control" id="id_fabricante" name="fabricante" placeholder="Fabricante da Peça">
                        </div>
                        <div class="form-group">
                            <label for="id_preco">Preço da Peça</label>
                            <input type="number" step="0.1" min="10" max="999" class="form-control" id="id_preco" name="preco" placeholder="Preço da Peça">
                        </div>
                        <div class="form-group">
                            <label for="id_quantidade">Quantidade da Peça</label>
                            <input type="number" step="1" min="0" max="999" class="form-control" id="id_quantidade" name="quantidade" placeholder="Quantidade da Peça">
                        </div>
                        <button type="submit" class="btn btn-default">enviar</button>
                    </form>
                    </fieldset>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
