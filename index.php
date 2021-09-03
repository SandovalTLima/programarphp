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
        <div id="condicionais">
        	<h3>Condicional if</h3>

        	<pre>
        		<code>
Ao usar o condicional if(se) o bloco de código dentro dele só é executado se a condição for satisfeita, como veremos no exemplo a seguir:
	
$idade = 18;
if($idade >= 18){
	echo "Maoir de idade";
}

Neste caso a condição foi satisfeita e o texto ("Maoir de idade") foi impresso.
Também é possível usar o else (senão), o else é executado quando a condição if não é satisfeita, veja no exemplo a seguir:
	
$idade = 17;
	if($idade >= 18){
		echo "Maoir de idade";
}else{
	echo "Menor de idade";
}

No exemplo acima  a condição if não foi satisfeita então o else é executado, o texto (Menor de idade) foi impresso.

<h3>Operador ternário</h3>
O operador ternário é uma alternativa para substituir o if…else em algumas situações por ser um comando em uma única linha. 
O operador ternário pode ser usado da seguinte forma: (condição) ? resultado1 : resultado, os valores dos resultados 1 e 2 podem sem impressos (como no exemplo a seguir) ou guardados em uma váriável. Veja no exemplo a seguir:

$idade = 17;
echo ($idade >= 18) ? "Maior de idade" : "Menor de idade";

No caso acima o texto (Menor de idade) foi impresso pois a condição não foi satisfeita.

<h3>Condicional NULL CAO</h3> 
O Condicional NULL CAO (só funciona a patir do PHP 7.4)  é usado para o valor de uma variável ser adicionada a uma condição caso ela exista se ela não existir não ocorrerá erro, o valor null sera adicionado no ligar. veja no exemplo a seguir:

$nome1 = 'João';
$nomeCompeto1 = $nome1;
//$nomeCompeto1 .= isset($sobreNome1) ? $sobreNome1 : null; Neste caso o operador NULL CAO não está sendo usado
$nomeCompleto1 .= ($sobreNome1) ?? null; // Com o operador NULL CAO foi possível simplificar o código da linha a cima.
echo $nomeCompeto1;

No exemplo acima o valor impresso será (João), pois a variável $sobreNome1 não existe.

				</code>
        	</pre>
        </div>  
			
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
	echo "$nomeCompleto estuda PHP"."<br/>";//."<br/>" serve para quebrar linha
	echo $x+$y."<br/>";
	//Arrays
	$ingredientes = ['açucar', 'farinha', 'ovos', 'fermento', 'leite']; 
	//$ingredientes2 = [...$ingredientes, 'chocolate'];
	echo $ingredientes[0]."<br/>";
	//echo $ingredientes2[2];
	//print_r($ingredientes);
	$idade = 17;
		if($idade >= 18){
			echo "Maoir de idade";
	}else{
		echo "Menor de idade";
	}

	$nome1 = 'João';
	$nomeCompeto1 = $nome1;
	$nomeCompeto1 .= isset($sobrenome1) ? $sobrenome1 : null ;
	echo $nomeCompeto1;


	//echo ($idade >= 18) ? "Maior de idade" : "Menor de idade";
?>
