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
        	<h3>Condicionais</h3>
        	<pre>
        		<code>
<h3>Condicional if</h3>

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

<h3>Condicional switch</h3>

O switch é uma condicional usado pra substituir um conjuntos de ifs e else.
No switch ele usa uma variável caso uma das opções case seja verdadeira ele entra na opção. O break serve para parar no case verdadeiro, caso não não use o break os próximos cases serão executados. 
O default ssubstitue o else, ele é executado quando nenhum case é verdadeiro. Veja o exemplo abaixo:

$numero = 0;
switch ($numero) {
	case 1:
		echo "Número 1";
		break;
	case 2:
		echo "Número 2";
		break;
	default:
		echo "Valor inválido";
		break;
}

No exemplo acima o bloco de código executado é o default, pois nenhum dos cases é verdeiro.

				</code>
        	</pre>
        </div>  
			
		</div>
		<div id="loops">
	<h3>Loops</h3>
	Loops são blocos de código que podem ser executados indefinidas vezes, até que a condição de parada seja falsa.
			<pre>
				<code>
<h3>Loop while</h3>
O loop (estrutura de repetição) while é executado até que a condição se torne verdadeira.

$parada = 0;
while ($parada < 10) {
	echo $parada;
	$parada = $parada + 1;
}

No exemplo acima a condição de parada é a variável $parada ser maior que 10, neste caso ao valor da variável $parada é executada 11 vezes, pois a cada interação a variável $parada é acrescida mais 1 ao seu valor.

<h3>Loop for</h3>
O for tem e seguinte estrutrura for (definir variável; condição de parada; interação) {código a ser executado}; veja o exemplo abaixo:
	
for ($numero = 0; $numero < 10; $numero++) { 
	echo "Número ".$numero;
} 

No exemplo acima a variável $numero é iniciada com valor 0, a condição de para é a variável ser maior que 9, a cada interação o valor da variável é acrescida de 1. O comando echo "Número ".$numero; é executado dez vezes.

<h3>Loop Foreach</h3>

O loop foreach tem o proposito único de trabalhar com arrays
O foreach ele é executado uma vez para cada elemento do array, ele pode acessar cada valor do array, acessando do primeiro até o último. Veja no exemplo abaixo:

$ingredientes = [
	'Açucar', 
	'farinha de trigo',
	'Ovo',
	'Leite',
	'fermento'
	];
foreach ($ingredientes as $ingrediente) {
	echo "Item: ".$ingrediente."</br>";
}

No exemplo acima o array $ingredientes é criado e seus elementos adicionas, logo abaixo usamos o for each para varrer o array e imprimir cada um dos elementos do array. Note que a cada interação a variável $ingrediente assume um elemento do array.
É possível também acessar a chave(índice) de cada elemento do array usando a seguinte estrutura:

$ingredientes = [
	'Açucar', 
	'farinha de trigo',
	'Ovo',
	'Leite',
	'fermento'
	];
foreach ($ingredientes as $chave => $valor) {
	echo "Ingrediente".$chave." : ".$valor."</br>";
};

Note no exemplo acima que usamos a variável $chave(índice) para pegar a chave e a variável $valor para pegra os dados do array.
É possível imprimir o vetor na forma de lista usando as tags <ul> e <li>, veja no exemplo abaixo:

$ingredientes = [
	'Açucar', 
	'farinha de trigo',
	'Ovo',
	'Leite',
	'fermento'
	];
echo '<ul>';
foreach ($ingredientes as $chave => $valor) {
	echo '<li>'.$valor.'</li>';
};
echo '</ul>';

				</code>
			</pre> 
			<div id="funcoes">
				<h3>Funções</h3>
				<pre>
					<code>
Funções são blocos de código reponsáveis por funções específicas, retonando um resultado esperado.
As funções já podem vir prontas ou podem ser criadas. As funções tem como grande benefício a reutilização de código, a medida que uma vez criada pode ser chamada em outros lugares do código.
Para criar uma função deve-se usar a palavra reservada function em seguida o nome da função, depois parenteses e por fim chaves. Veja no exemplo a seguir:

function subsequente(){
	for ($i=0; $i < 10; $i++) { 
		echo $i.'<br/>'; //Esta função imprime os valores de $i

	}
//	echo '<hr/>';//Linha horizontal
}; //Criação da função
subsequente(); //Afunção é chamada para ser executada

Note que a função é criada os dados são processados e ela tem como retorno a impressão dos valores de $i.
Observação, a função só é executada quando, se for chamada. 

<h3>Parâmetros de funções</h3>
Parâmetros são importantes para passar valores para a função usa-los.
O parâmetros são variáveis que são definidas entre os parenteses da função, sendo separados por vírgula.
Veja no exemplo abaixo:

function somar($n1, $n2){ // os parâmetros $n1 e $n2 são definidos
	$total = $n1 + $n2; // O valor da soma de $n1 e $n2 é armazenado na variável $total
	return $total; O valor da variável total é retornado 

};

$soma = somar(5, 6); // O valor retornado é armazenado na variável $soma, depois que a função somar é chamada e sendo passados os valores 5, correspondente a variável $n1 e 6, correspondente a variável $n2.  
echo "Total: ".$soma; //O valor da variável soma é impresso.

<h3>Parâmetros type e valor padrão</h3>
					</code>
				</pre>
				
			</div>
			
		</div>


			</body>
	</html>

<?php
/*
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
	$numero = 0;
	switch ($numero) {
		case 1:
			echo "Número 1";
			break;
		case 2:
			echo "Número 2";
			break;
		
		default:
			echo "Valor inválido";
			break;
	}
	/*
	$parada = 0;
	while ($parada < 10) {
		echo $parada.</br>;
		$parada = $parada + 1;
	} 

	for ($numero = 0; $numero < 10; $numero++) { 
		echo "Número ".$numero; 
	$ingredientes = [
		'Açucar', 
		'farinha de trigo',
		'Ovo',
		'Leite',
		'fermento'
	];
	foreach ($ingredientes as $ingrediente) {
		echo "Item: ".$ingrediente."</br>";
	}
	
$ingredientes = [
	'Açucar', 
	'farinha de trigo',
	'Ovo',
	'Leite',
	'fermento'
	];
echo '<ul>';
foreach ($ingredientes as $chave => $valor) {
	echo '<li>'.$valor.'</li>';
};
echo '</ul>';
$caractere = "-";
for ($i = 0; $i < 10; $i++) { 
	for ($j=0; $j < 10; $j++) {
		echo $caractere;
		
			}
			echo "".'</br>';		
}

$caractere = "-";
for ($i = 0; $i < 20; $i++) { 
	for ($j=0; $j < $i; $j++) {
		echo $caractere;
		
			}
			echo "".'</br>';		
}
function subsequente(){
	for ($i=0; $i < 10; $i++) { 
		echo $i.'<br/>'; //Esta função imprime os valores de $i

	}
	echo '<hr/>';//Linha horizontal
}; //Criação da função
subsequente(); //Afunção é chamada para ser executada
*/
function somar($n1, $n2){ // os parâmetros $n1 e $n2 são definidos
	$total = $n1 + $n2; // O valor da soma de $n1 e $n2 é armazenado na variável $total
	return $total; //O valor da variável total é retornado 

};

$soma = somar(5, 6); // O valor retornado é armazenado na variável $soma, depois que a função somar é chamada e sendo passados os valores 5, correspondente a variável $n1 e 6, correspondente a variável $n2.  
echo "Total: ".$soma; //O valor da variável soma é impresso.


?>
