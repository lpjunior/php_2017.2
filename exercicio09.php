<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>primeira Avaliação - Exercício 09 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Calculo de salário</legend>
			<form action="#" method="post">
				<label for="vendedor_">Vendedor</label><br>
				<input type="text" name="vendedor" id="vendedor_"><br>
				<label for="salario_">Salário</label><br>
				<input type="number" step="any" name="salario" id="salario_"><br>
				<label for="vendas_">Total de Vendas</label><br>
				<input type="number" step="any" name="vendas" id="vendas_"><br>
				<button type="submit" step="any" class="btn btn-success">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<!-- Codigo PHP -->
			<?php
				if(isset($_POST['vendedor']) &&
				   isset($_POST['salario']) &&
				   isset($_POST['vendas'])) {
					   
					$vendedor = $_POST['vendedor'];
					$salario = $_POST['salario'];
					$vendas = $_POST['vendas'];
					
					$salarioTotal = $salario + ($vendas * 1.15);
					
					echo "O salário do $vendedor é de: $salario e seu salário final com a comissão de 15% é de: $salarioTotal";
				}
			?>
		</div>
	</div>
</body>
</html>