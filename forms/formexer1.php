<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/stylesexer1.css">
	<title>Formulário 1</title>
</head>

<body>

	<header>
		<h1>consultorio da doutora bolota</h1>
	</header>

	<?php
	session_start();
	if (isset($_SESSION['FORM_ERROR'])) {
		echo "<h1 style='color: red;'>" . $_SESSION['FORM_ERROR'] . "</h1>";
		unset($_SESSION['FORM_ERROR']);
	}
	?>


	<section class="formulario">
		<form method="POST" action="processa_script.php">
			<label for="nome">Nome Completo</label>
			<br>
			<input id="nome" name="nome" type="text">
			<br><br>
			<label for="datanasc">Data de Nascimento</label>
			<br>
			<input id="datanasc" name="datanasc" type="date">
			<br><br>
			<label for="peso">Peso</label>
			<br>
			<input id="peso" name="peso" type="number" step="0.01">
			<br><br>
			<label for="altura">Altura</label>
			<br>
			<input id="altura" name="altura" type="number" step="0.01">
			<br><br>
			<label>Sexo</label>
			<br>
			<input id="masc" type="radio" value="m" name="gender">
			<label for="masc">Masculino</label>
			<input id="fem" type="radio" value="f" name="gender">
			<label for="fem">Feminino</label>
			<br><br>
			<input type="submit" value="Enviar">
			<input type="reset" value="Limpar campos">
		</form>
	</section>

	<footer>

	</footer>

</body>

</html>