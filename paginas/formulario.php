<?php
session_start();

if($_SESSION['aviso']){
	echo $_SESSION['aviso']; //caso haja um aviso da página recebedor, é impresso nesta página
	$_SESSION ['aviso'] = " "; //aviso limpo
}
?>
<a href="apagar.php">Apagar Cookie</a>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário</title>
	<h1 align="center">Formulário</h1>

</head>
<body>

<form method="POST" action="recebedor.php"> //metodo POST envia os dados sem que o usuário tenha acesso, GET o usuário tem acesso aos dados
	<h4>Campos com * são obrigatórios</h4>
	<label>
		Nome*:
		<br/>
		<input type="text" name="nome"/>
	</label>
	<br/>
	<br/>
	<label>
		Idade*: 
		<br/>
		<input type="text" name="idade"/>
	</label>
	<br/>
	<br/>
	<label>
		Email*:
		<br/>
		<input type="POST" name="email">
		<br/>
		<br/>
	</label>
	<input type="submit" name="enviar"/>

</form>

</body>
</html>

