<?php


print_r($_POST);
echo "<br><br><br>";


if (!empty($_POST['nome']) && !empty($_POST['datanasc']) && !empty($_POST['altura']) && !empty($_POST['peso']) && !empty($_POST['gender'])) {
	$nome = ucfirst($_POST['nome']);
	$datanasc = $_POST['datanasc'];
	$altura = (float) $_POST['altura'];
	$peso = (float) $_POST['peso'];
	$gender = $_POST['gender'];
	$xiruveio = false;

	// $dataSeparada = explode('-', $datanasc);
	// $ano = $dataSeparada[0];
	// para pegar o ano pode ser essas duas linhas acima ou abaixo

	$ano = date('Y', strtotime($datanasc));

	$imc = $peso / (pow($altura, 2));

	if ($imc >= 0 && $imc <= 18.5) {
		$resultado = "abaixo do peso.";
	} else if ($imc > 18.5 && $imc <= 24.9) {
		$resultado = "com o peso normal.";
	} else if ($imc > 24.9 && $imc < 29.9) {
		$resultado = "com obsesidade 1.";
	} else if ($imc >= 29.9) {
		$resultado = "com obsesidade 2.";
	} else {
		$xiruveio = true;
		$resultado = "Pô xiru veio! Seu IMC é negativo! Escreve as informações direitinho kkkkkkkkkk";
	}

	if ($gender == 'm') {
		$pronome = "Sr.";
	} else {
		$pronome = "Sra.";
	}

	if (!$xiruveio) {
		echo "$pronome $nome, seu imc é: $imc, então, você está $resultado";
	} else {
		echo $resultado;
	}
} else {
	session_start();
	$_SESSION['FORM_ERROR'] = "Preencha todos os campos antes de enviar o formulário.";
	header('Location: ./formexer1.php');
}
