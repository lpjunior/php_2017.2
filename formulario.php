            <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
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