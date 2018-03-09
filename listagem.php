<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <title>Aula 03</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <style>
            * {
                box-sizing: border-box;
            }

            #inputBusca {
                background-image: url('img/searchicon.png');
                background-position: 10px 10px;
                background-repeat: no-repeat;
                width: 100%;
                font-size: 16px;
                padding: 12px 20px 12px 40px;
                border: 1px solid #ddd;
                margin-bottom: 12px;
            }

            #tablePecas {
                border-collapse: collapse;
                width: 100%;
                border: 1px solid #ddd;
                font-size: 18px;
            }

            #tablePecas th, #tablePecas td {
                text-align: left;
                padding: 12px;
            }

            #tablePecas tr {
                border-bottom: 1px solid #ddd;
            }

            #tablePecas tr.header, #tablePecas tr:hover {
                background-color: #f1f1f1;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Gerenciamento de Peças</h1>
            <p>Senac Automotivo Ltda</p> 
        </div>

        <div class="container-fluid">
            <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12"  align="center">
                <div class="col-md-offset-1 col-md-10">

                    <h2>Peças cadastradas</h2>

                    <input type="text" id="inputBusca" onkeyup="filtro()" placeholder="Procure as peças por nome ou código.." title="Informe um nome ou código">

                    <table id="tablePecas">
                        <tr class="header">
                            <th style="width:20%;">Código</th>
                            <th style="width:60%;">Nome</th>
                            <th style="width:40%;">Modelo</th>
                            <th style="width:40%;">Ano</th>
                            <th style="width:60%;">Fabricante</th>
                            <th style="width:40%;">Preço</th>
                            <th style="width:40%;">Quantidade.</th>
                            <th style="width:40%;">Editar</th>
                            <th style="width:40%;">Excluir</th>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>Rolamento da Roda</td>
                            <td>30208 J2/Q</td>
                            <td>2008</td>
                            <td>SKF</td>
                            <td>36,27</td>
                            <td>1</td>
                            <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
                            <td><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Amortecedor Traseiro</td>
                            <td>HG 31128</td>
                            <td>2016</td>
                            <td>Nakata</td>
                            <td>139,50</td>
                            <td>5</td>
                            <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
                            <td><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Coxim do Amortecedor Dianteiro</td>
                            <td>022.0776</td>
                            <td>2006</td>
                            <td>Monroe Axios</td>
                            <td>77,00</td>
                            <td>10</td>
                            <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
                            <td><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script>
                        function filtro() {
                            var input, filter, table, tr, td, i;
                            input = document.getElementById("inputBusca");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("tablePecas");
                            tr = table.getElementsByTagName("tr");
                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[0];
                                if (td) {
                                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }
                            }
                            
                        }
            </script>
    </body>
</html>
