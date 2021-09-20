<?php 
session_start();
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
if ($nome) {
	echo $nome;
}else{
	echo "Digite seu nome";
	header("location: formulario2.php");
};





 ?>

 <a href="./formulario2.php">Voltar</a>