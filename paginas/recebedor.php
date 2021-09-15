<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);//validando idade
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //validando email
if ($nome && $idade && $email) {
	$expiracao = time() + (86400 * 30); //tempo de vida (1 dia) definido
	setcookie('nome', $nome, $expiracao); //cookie setado
	echo "Nome: ".$nome.'<br/>';
	echo "Idade: ".$idade.'<br/>';
	echo "Email: ".$email.'<br/>';
} else {
	$_SESSION['aviso'] = 'Preencha os itens corretamente'; //aviso para enviar para a página formulario
	header("location: formulario.php");
	exit;
}


?>