<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    <%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Cliente</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <main>
    	<section style="margin-top: 5%">
    		<div class="container-fluid">
    			<div class="col-md-4 col-md-offset-4">
	    			<fieldset>
	    				<legend>Formulário de Cadastro de Cliente</legend>
	    				<form action="cadastrar" method="post" role="form">
	    					<div class="form-group">
	    						<label for="id_nome">Nome</label>
	    						<input type="text" class="form-control" id="id_nome" name="txtNome" required aria-required="true">
	    					</div>
	    					<div class="form-group">
	    						<label for="id_tel">Telefone</label>
	    						<input type="tel" class="form-control" id="id_tel" name="txtTelefone" required aria-required="true">
	    					</div>
	    					<button type="submit" class="btn btn-success btn-block" role="button">Cadastrar</button>
	    				${msg}
	    				</form>
	    			</fieldset>
    			</div>
    		</div>
    	</section>
    </main>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- JS para funcionamento do Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  </body>
</html>