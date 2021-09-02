<!DOCTYPE html meta chaset="UTF-8">
<html>
	<head>
		<title>Estudando php e html</title>
	</head>
	<body>
		<div id="variáveis">
			<h3>Variáveis em PHP</h3>
			<p>Em php usa-se o caractere $ para criar e usar uma váriável </p>
			<p>O comando echo impime na tela</p> 
			<pre>
				<code>
$x = 10;
echo $x + 10;
			<h3>Tipos de dados</h3>
$verdadeiroFalso = true; //boolean
$n = 12 //inteiro;
$vazio = null; //vazio
$nome = "sandoval"; //string
				</code>
			</pre>
			<h3>Mesclando variáveis</h3>
			<pre>
				<cod>
$nome = 'José';
$sobrenome = 'Silva';
$nomeCompleto = $nome.' '.$sobrenome; //Deste modo os dois textos são concatenados. O uso de ' ' entre os dois textos serve para dar um espaço.
echo "$nomeCompleto estuda PHP"; //Concatenando o valor da variável com as strings.
echo $x+$y; // neste caso é impresso o valor da soma dos dois valores das variáveis.
				</cod>
			</pre>
		</div>
			</body>
	</html>

<?php
	$x = 10;
	$y = 5;
	//echo $x + 10;
	//echo "Este é um código php";
	//Tipos de variáveis
	$verdadeiroFalso = true; //boolean
	$n = 12; //inteiro
	$vazio = null; //vazio
	$nome = 'sandoval'; //string
	//Mesclando variáveis
	$nome = 'José';
	$sobrenome = 'Silva';
	$nomeCompleto = $nome.' '.$sobrenome;
	echo "$nomeCompleto estuda PHP";
	echo $x+$y;
?>
