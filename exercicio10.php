<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>primeira Avaliação - Exercício 10 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Calculo de rendimento</legend>
			<form action="#" method="post">
				<label for="deposito_">Deposito</label><br>
				<input type="number" step="any" name="deposito" id="deposito_"><br>
				<button type="submit" class="btn btn-warning">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<!-- Codigo PHP -->
			<?php
				if(isset($_POST['deposito'])) {
					   
					$deposito = $_POST['deposito'];
					$juro = 0.007;
					$rendimento = $deposito + ($deposito * $juro);
					
					echo "O saldo após um mês de rendimento é: $rendimento";
				}
			?>
		</div>
	</div>
</body>
</html>