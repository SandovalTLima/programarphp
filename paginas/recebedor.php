<?php

$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
if ($nome && $idade) {
	echo " Nome: ".$nome;
	echo " Idade: ".$idade;
} else {
	header("location: formulario.php");
	exit;
}


?>