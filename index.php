<!DOCTYPE html meta chaset="UTF-8">
<html>
	<head>
		<title>Estudando php e html</title>
	</head>
	<body>
		<div id="introducao">
			<pre>
				<code>
					<h2>Estrutura básica PHP</h2>
					
<img src="../imagens/php.png"/> 

				</code>
			</pre>
		</div>

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
		<div id="vetores">
			<h3>Arrays (Vetores)</h3>
            <pre>
            	<code>
Arrays são vetores responsáveis por armazenar dados em uma única variável.
Para criar o vetor cria-se uma váriavel, em seguida entre cochetes adiciona-se os dados separados por vírgula, como no exemplo a seguir:
$ingredientes = ['açucar', 'farinha', 'ovos', 'fermento', 'leite']; 
Os dados do vetor são acessados pelo índice (o índice inicial é 0), como no exemplo a seguir:

echo $ingredientes[0];

Neste exemplo o dado inicial (índice 0) é impresso na tela.
			<h3>Operador array spread</h3>
O operador array spread é usado para adicionar um vetor dentro de outro, veja o exemplo a seguir:
	$ingredientes = ['açucar', 'farinha', 'ovos', 'fermento', 'leite']; 
	$ingredientes2 = [...$ingredientes, 'chocolate'];
Para mostrar todos os dados do array usa-se o comando print_u(nomedoarray), veja o exemplo a seguir:


            	</code>
            </pre>
			
		</div>>
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
	echo "$nomeCompleto estuda PHP"."<br/>";//."<br/>" serve para quebrar linha
	echo $x+$y."<br/>";
	//Arrays
	$ingredientes = ['açucar', 'farinha', 'ovos', 'fermento', 'leite']; 
	//$ingredientes2 = [...$ingredientes, 'chocolate'];
	echo $ingredientes[0]."<br/>";
	//echo $ingredientes2[2];
	//print_r($ingredientes);
?>
