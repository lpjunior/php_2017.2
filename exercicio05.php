<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>primeira Avaliação - Exercício 05 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body align="center">
	<div class="col-xs-4 col-xs-offset-4">
		<fieldset>
			<legend>Verificar se um número é par ou impar</legend>
			<form action="#" method="post">
				<label for="numero_">Número</label><br>
				<input type="number" name="numero" id="numero_"><br>
				<button type="submit" class="btn">Enviar</button>
			</form>
		</fieldset>
	</div>
	
	<div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%">
		<P>Resultado:</P>
		<div class="jumbotron">
			<!-- Codigo PHP -->
			<?php
				if(isset($_POST['numero'])) {
					   
					$numero = $_POST['numero'];
					
					if($numero % 2 == 0){
						echo "O número informado[$numero] é par";
					} else {
						echo "O número informado[$numero] é impar";
					}
				}
			?>
		</div>
	</div>
</body>
</html>