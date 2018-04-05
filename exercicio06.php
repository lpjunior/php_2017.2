<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>primeira Avaliação - Exercício 06 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Calculo de salário</legend>
			<form action="#" method="post">
				<label for="carros_">Carros</label><br>
				<input type="number" name="carros" id="carros_"><br>
				<button type="submit" class="btn btn-default">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<!-- Codigo PHP -->
			<?php
				if(isset($_POST['carros'])) {
					   
					$carros = $_POST['carros'];
					$salario = 800;
					$comissao = 300;
					$salarioTotal = $salario + ($comissao * $carros);
					
					echo "O salário do funcionário com a comissão é: $salarioTotal";
				}
			?>
		</div>
	</div>
</body>
</html>