<?php 


print_r($_POST);



$nome = $_POST['nome'];
$idade = $_POST['idade'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];

echo "<br><br>nome: $nome <br> idade: $idade <br> altura: $altura <br> peso: $peso ";