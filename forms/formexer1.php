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

	</header>


	<section class="formulario">
		<form method="POST" action="processaFormExer1.php">

			<label for="nome">Nome</label>
			<input id="nome" name="nome" type="text">

			<label for="idade">Idade</label>
			<input id="idade" name="idade" type="number">

			<label for="altura">Altura</label>
			<input id="altura" name="altura" type="number" step="0.01">

			<label for="peso">Peso</label>
			<input id="peso" name="peso" type="number" step="0.01">

			<input type="submit" value="Enviar">
			<input type="reset" value="Limpar campos">
		</form>
	</section>

	<footer>

	</footer>

</body>

</html>