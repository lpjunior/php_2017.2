<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>primeira Avaliação - Exercício 07 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Calculo de média</legend>
			<form action="#" method="post">
				<label for="nota01_">Nota01</label><br>
				<input type="number" step="any" name="nota01" id="nota01_"><br>
				<label for="nota02_">Nota02</label><br>
				<input type="number" step="any" name="nota02" id="nota02_"><br>
				<label for="nota03_">Nota03</label><br>
				<input type="number" step="any" name="nota03" id="nota03_"><br>
				<label for="nota04_">Nota04</label><br>
				<input type="number" step="any" name="nota04" id="nota04_"><br>
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<!-- Codigo PHP -->
			<?php
				if(isset($_POST['nota01']) &&
				   isset($_POST['nota02']) &&
				   isset($_POST['nota03']) &&
				   isset($_POST['nota04'])) {
					   
					$nota01 = $_POST['nota01'];
					$nota02 = $_POST['nota02'];
					$nota03 = $_POST['nota03'];
					$nota04 = $_POST['nota04'];
					
					$media = ($nota01 * 1 + $nota02 * 2 + $nota03 * 3 + $nota04 * 4) / (1 + 2 + 3 + 4);
										
					echo "A média do aluno é: $media";
				}
			?>
		</div>
	</div>
</body>
</html>