
<a href="./paginas/home.php">Home</a>
<a href="./paginas/config.php">Config</a>
<a href="./paginas/header.php">Header</a>
<a href="./paginas/sobre.php">Sobre</a>
 

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
					
<img src="./imagens/php.png"/> 

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
Podemos adicionar parâmetros opcionais. Isso é possível atribuindo um valor padrão ao parâmetro, caso o parâmetro não seja passado ao chamar a função o valor padrão é adicionado. Veja no exemplo abaixo:

function somar($n1, $n2, $n3 = 0){ // os parâmetros $n1 e $n2 são definidos. O valor padrão de $n3 foi definido como 0
	$total = $n1 + $n2; // O valor da soma de $n1 e $n2 é armazenado na variável $total
	return $total; //O valor da variável total é retornado 

};

$soma = somar(5, 6); // O valor retornado é armazenado na variável $soma, depois que a função somar é chamada e sendo passados os valores 5, correspondente a variável $n1 e 6, correspondente a variável $n2. Neste caso como o terceiro parâmetro não foi adicionado, tereiro parâmetro assumiu o valor padrão  
echo "Total: ".$soma; //O valor da variável soma é impresso.

Tipos de parâmetros podem ser definidos, isso é possível adicionando o tipo de dado que se espera (int $n1, por exemplo).
<h3>Parâmetros referência ou valor</h3>
Passando parâmetros como referência e passando parâmetros como valor: Para passar parâmetros por valor, deve-se passar as variáveis como os parâmetros. Como no exemplo abaixo:  

unction somar($n1, $n2){
	$total = $n1 + $n2;
	return $total;
};

$x = 5; //As variáveis $x e $y são criadas e seus valores atribuidos
$y = 5;
echo "Total: ".somar($x, $y); //As variáveis $x e $y são passadas como parâmetros

Para passar uma variável como referência usa-se o simbolo &, como podemos ver abaixo:

function somar($n1, $n2, &$total){
	$total = $n1 + $n2;
	return $total;
};

$x = 5; //As variáveis $x e $y são criadas e seus valores atribuidos
$y = 5;
$soma = 0;
somar($x, $y, $soma);
echo "Total: ".$soma; //As variáveis $x e $y são passadas como parâmetros

Note que ao passar a variável $total como parâmetro não há necessidade de usar o return, pois o terceiro elemento é usado para receber o valor da variável $total, no caso a cima a variável $soma.
<h3>Funções anônimas</h3>
Funções anônimas são funções onde não se declara um nome. As funções anônimas podem ser usadas de duas formas: armazenando ela numa variável ou passando ela como parâmetro para outra função. 
Usando uma função anônima com uma variável. Veja no exemplo abaixo:

$dizimo = function(int $valor){
	return $valor * 0.1;
};

echo $dizimo(100);

Usando uma função como parâmetro para outra função. Veja no exemplo abaixo:

function($n1, function(parametros){ código }){

};

<h3>Funções flecha (arrow)</h3>
Funções flecha são funções que só podem fazer uma comando. Esta função ao invés de usar a palavra reservada function, usa a palavea fn. sua estrutura esta representada no exemplo abaixo:

$dizimo = fn($valor) => $valor * 0.1;
echo $dizimo(200);

Note que a única instrução executada pela função é $valor * 0.1
<h3>Funções recursivas</h3>
Uma função recursiva é uma função que executa (chama) ela mesma. Ela é chamada dentro dela mesma até que a condição seja satisfeita. Veja no exemplo abaixo:

function dividirRecursiva($numero){ //A função recebe como parâmetro um número 
	$metade = $numero / 2; // O número é dividido
	echo $metade."<br/>";
	if (round($metade) > 0) { // O número é arredondado para não acontecer diversar divisões de frações de 0. 
		dividirRecursiva($metade); //A função é chamada de maneira recursiva.
	};
};
dividirRecursiva(100);
<h3>Funções nativas de matemática</h3>
São funções matémáticas pré existentes no php, havendo só a necessidade de chama-las. Veja alguns exemplos:
Pegar o módulo de um número. veja no exemplo abaixo o uso da função abs().

//Módulo de um número
$numero = -10;
echo abs($numero);

Função pi: esta função retorna o valor de pi. Veja no exemplo: echo pi();
Para arredondar um número para baixo usamos a função foor(). Veja o exemplo: echo floor(3.14); 
Para arredondar um número para cima usamos a função ceil(). Veja o exemplo: echo ceil(3.14);
Para arredondar um número para cima ou para baixo dependendo do seu valor usamos a função round(). Veja o exemplo: echo round(3.14); neste caso irá arredondar par 3, pois 3.14 é mais póximo de 3 que de 4.
Para gerar um valor aleatório dentro de um intervalo usamos a função rand(). veja no exemplo: echo rand(5, 10); note que o intervalo é de 5 a 10.
Para pegar o número maior em uma lista usamos a função max(). Veja o exemplo: echo max(1, 5, 8, 2); é possivel passar uma lista como parâmetro.
Para pegar o número menor em uma lista usamos a função min(). Veja o exemplo: echo min(1, 5, 8, 2); é possivel passar uma lista como parâmetro.
<h3>Funções nativas de strings</h3>
São funções internas do php que trabalham com strings.
Para tirar os espaços de uma string usamos a função trim(). veja no exemplo seguinte: echo trim('  trim '); será impreso somente o texto trim.
Para contar o número de caracteres de uma string usamos a função strlen(). Veja o próximo exemplo: echo strlen('teste'); neste caso a função retornará o calor 5.
Para deixar todos os caracteres de uma string minúculos usamos a função strtolow(). veja no exemplo a seguir: echo strtolower('testE'); neste caso será retornada a string teste.
Para retornar em maiusculo todos os caracteres de uma string usamos a função strtoupper(). Vaja o exemplo seguinte: echo strtoupper('Teste'); nesse exemplo sera retornada a string TESTE.
Para trocar uma palavra ou um caractere por outro usamos a função str_replace(); Veja no exemplo a baixo:

$nome = 'José Santos';
$nomeCorreto = str_replace('Santos', 'Silva', $nome); //A função procura a string Santos e substitui por Silva na variável $nome
echo $nomeCorreto; //A função echo imprime a string modificada, a saída é José Silva

Observação: onde for encontrada uma string igual é substituida pela nova.
Para pegar uma parte de uma string usamos a função substr(); o primeiro parâmetro passamos a string que queremos pegar os caracteres, no segundo informamos onde começa e o terceiro onde termima. Veja no exemplo: echo substr('eu sou uma string', 6, 14); //Note que a função ignora os spaços vazios. O funlção echo imprime a string: uma string
Para pegar a posição de um caractere ou um conjunto de caracteres em uma string usamos a função strpos(); veja no exemplo a seguir: echo strpos('uma string', 's'); //Nesse caso a função retorna o valor 4
Para transformar uma string em um array usamos a função explode(); passamos como primeiro parâmetros o que vamos procurar normalmente  ' ' espaços vazios para servir de divisor, o segundo parâmetro é a string. Veja no exemplo print_r(explode(' ', 'Açucar Ovos Leite Fermento'));
Para organizar (formatar) um número usamos a função number_format(); nesta função o primeiro parâmetro é o úmero a ser organizado, o segundo a quantidade de casas caso seja uma fração o terceiro o simbolo para separa a casa decimal o quarto para separar os milhares. Veja  no exemplo a seguir: echo number_format(1235290.12, 0, ',', '.');// 1.235.290 este é o retorno da função
<h3>Funções nativas de arrays</h3>
As funções nativas de arrays são função já implementadas no própio php.
Para saber quantos itens tem no array usamos a função count(); veja no exemplo a seguir: echo count($lista = ['Nome1', 'Nome2', 'Nome3', 'Nome4']); //A função retorna o valor 4
Para gerar um array a partir de outros dois arrays com os itens que não estão em ambos arrays, usamos a função array_diff(); no primeiro parâmetro passamos a primeira lista e no segundo a segunda lista. Veja no exemplo abaixo:

$lista1 = ['João', 'Maria', 'Pedro'];
$lista2 = ['Maria', 'Pedro'];
$lisra3 = array_diff($lista1, $lista2); //nessa nova lista só vai ter João
print_r($lisra3);

A função array_filter(); possibilita diversas operações com arrays, nessa função o primeiro parâmetro é o array e o segundo parâmetro uma função. esta função pode fazer diversas operações com os elementos do array. Veja o exemplo abaixo:

$lista = [1, 3, 9, 7, 2];
$lista2 = array_filter($lista, function($valor){ //neste caso a função preenche a $lista3 com os returns
	if ($valor > 5) {
		return $valor;
	}else{
		return 0;
	}
});

print_r($lista2);

Para rodar uma função em um array podemos usar a função array_map(); essa função pode ser usada para entre outras coisas dobrar o valor de cada elementos do array. Veja o exemploa abaixo:

$lista = [1, 3, 9, 7, 2];
$lista2 = array_map(function($item){ //nesse caso o novo vetor vai ter os elementos com o dobro do valor do primeiro vetor
	return $item * 2;
}, $lista);
print_r($lista2);

Para remover o último elemento de um array usamos a função array_pop(); passamos o array como parâmetro. Veja o exemplo: array_pop($lista);
Para remover o primeiro elemento de um array usamos a função array_shift(); passamos como parâmetro o array. Vaja o exemplo: array_shift($lista);
Para checar se existe determinado elemento em um array usamos a função in_array(); passamos no primeiro parâmetro o elemento e no segundo o array. Veja o exemplo:

$lista = [10, 5, 40, 25];
if (in_array(5, $lista)) {
	echo "O elemento existe"; // O if é executado pois o elemento 5 existe no array
}else{
	echo "O elemento não existe";
};

Para checar se um elemento existe em um array e pegar a posição do elemento usamos a função array_search(); passamos como primeiro parâmetro o elemento e no segundo o array. veja o exemplo a seguir: echo array_search(10, $lista = [1, 6, 7, 10]); //neste exemplo o elemento existe na posição 3 
Para organizarmos os elementos de um array em ordem decrescente usamos a função rsort(); passamos como parâmetro o array. Veja o exemplo: 

//rsort ordena a lista em ordem decrescente
$lista = [1, 6, 7, 10];
rsort($lista); //Ordena a lista
print_r($lista);

Para organizarmos os elementos de um array em ordem crescente usamos a função sort(); passamos como parâmetro o array. Veja o exemplo: 

//sort ordena a lista em ordem crescente
$lista = [1, 6, 7, 10];
sort($lista); //Ordena a lista
print_r($lista);

Para transformar um array em uma string usamos a função implode(); nessa função passamos como primeiro parâmetro o que vai separar cada elemento do array, neste caso usamos um espaço ' ', no segundo usamos o vetor. Veja o exemplo: echo implode(" ", $lista = ['João', 'vai', 'a', 'escola']);

<h3>Funções nativas data/hora</h3>
São funções internas do php para o uso de data e hora.
Para exibir a data usamos a função date(); no primeiro parâmetro usamos o formato da data (ex. 'd/m/y' é possível tambem pegar a hora: 'd/m/y H:i:s', nesse caso ele pega o fuso horário greenwich). Veja o exemplo: echo date('d/m/y H:i:s'); //a função retorna a data e a hora.
					</code>
				</pre>
				
			</div>
			<div id="multiplosArquivos">
				<h3>Trabalhando com múltiplos arquivos</h3>
				<pre>
					<code>
No php é posivel trabalhar com diversos arquivos, estes arquivos podem ser inclídos ao usarmos a palavra reservada include ou require. Ao importamos arquivos podemos usar as variáveis e funções. Veja o exemplo a seguir:

//chamando o arquivo header.php
require('header.php');
//chamando o arquivo config.php
require('config.php');
//imprimindo uma variável de outro arquivo (config.php)
echo $nome;

Para evitar que um arquivo seja executado mais de uma vez é recomendável usar o require_once(); o  require_once verifica de já foi importado o mesmo arquivo, caso já tenha cido importado ele não executa novamente.
					</code>

				</pre>

			</div>
			<div id="pastas">
				<h3>Trabalhando com pastas diferentes</h3>
				<pre>
					<code>
Em um projeto devemos usar pastas pastas para organizar-lo. Para acessar um arquivo em outra pasta usamos o seguinte caminho: ./nomeDaPasta/nomeDoArquivo.extensão. Veja o exemplo abaixo:

//chamando o arquivo header.php
require('./template/header.php');
//chamando o arquivo config.php
require_once('./template/config.php');
//imprimindo uma variável de outro arquivo (config.php)
echo $nome;
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

function somar($n1, $n2, $n3 = 0){ // os parâmetros $n1 e $n2 são definidos. O valor padrão de $n3 foi definido como 0
	$total = $n1 + $n2; // O valor da soma de $n1 e $n2 é armazenado na variável $total
	return $total; //O valor da variável total é retornado 

};

$soma = somar(5, 6); // O valor retornado é armazenado na variável $soma, depois que a função somar é chamada e sendo passados os valores 5, correspondente a variável $n1 e 6, correspondente a variável $n2. Neste caso como o terceiro parâmetro não foi adicionado, tereiro parâmetro assumiu o valor padrão  
echo "Total: ".$soma; //O valor da variável soma é impresso.


function somar($n1, $n2){
	$total = $n1 + $n2;
	return $total;
};

$x = 5; //As variáveis $x e $y são criadas e seus valores atribuidos
$y = 5;
echo "Total: ".somar($x, $y); //As variáveis $x e $y são passadas como parâmetros



function somar($n1, $n2, &$total){
	$total = $n1 + $n2;
	return $total;
};

$x = 5; //As variáveis $x e $y são criadas e seus valores atribuidos
$y = 5;
$soma = 0;
somar($x, $y, $soma);
echo "Total: ".$soma; //As variáveis $x e $y são passadas como parâmetros


$dizimo = function(int $valor){
	return $valor * 0.1;
};

echo $dizimo(100);

function($n1, function(parametros){ código }){

};


$dizimo = fn($valor) => $valor * 0.1;
echo $dizimo(200);


function dividirRecursiva($numero){ //A função recebe como parâmetro um número 
	$metade = $numero / 2; // O número é dividido
	echo $metade."<br/>";
	if (round($metade) > 0) { // O número é arredondado para não acontecer diversar divisões de frações de 0. veja no exemplo abaixo:
		dividirRecursiva($metade); //A função é chamada de maneira recursiva.
	};
};
dividirRecursiva(100);

//Módulo de um número
$numero = -10;
echo abs($numero);


//pi
echo pi();

//foor arredondar para baixo
echo floor(3.14);

//ceil erredonda para cima
echo ceil(3.14);

//round arredonda para cima ou para baixo
echo round(3.14);

//rand sorteia um número em determinado intervalo
echo rand(5, 10);

//max retorna o maior número
echo max(1, 5, 8, 2);
//min retorna o menor número
echo min(1, 5, 8, 2);

//trim elimina os espaços de uma string
echo trim(' assim   ');

//strlen retorna a quantidade de carcteres de uma string
echo strlen('teste');

//strtolower retorna todos os caracteres de uma string minuscula
echo strtolower('testE');

//strtoupper retorna maisculo todos os caracteres de uma string
echo strtoupper('Teste');

$nome = 'José Santos';
$nomeCorreto = str_replace('Santos', 'Silva', $nome); //A função procura a string Santos e substitui por Silva na variável $nome
echo $nomeCorreto; //A função echo imprime a string modificada, a saída é José Silva

echo substr('eu sou uma string', 6, 14); //Note que a função ignora os spaços vazios. O funlção echo imprime a string: uma string 

//strpos() usada para pegar a posição de um caractere
echo strpos('uma string', 's'); //Nesse caso a função retorna o valor 4

//explode() é usada para fazer um vetor com uma string
print_r(explode(' ', 'Açucar Ovos Leite Fermento'));

echo number_format(1235290.12, 0, ',', '.');// 1.235.290 este é o retorno da função

echo count($lista = ['Nome1', 'Nome2', 'Nome3', 'Nome4']); //A função retorna o valor 4

$lista1 = ['João', 'Maria', 'Pedro'];
$lista2 = ['Maria', 'Pedro'];
$lisra3 = array_diff($lista1, $lista2); //nessa nova lista só vai ter João
print_r($lisra3);

//array_filter()
$lista = [1, 3, 9, 7, 2];
$lista2 = array_filter($lista, function($valor){ //neste caso a função preenche a $lista 3 com os returns
	if ($valor > 5) {
		return $valor;
	}else{
		return 0;
	}
});

print_r($lista2);

//array_map
$lista = [1, 3, 9, 7, 2];
$lista2 = array_map(function($item){ //nesse caso o novo vetor vai ter os elementos com o dobro do valor do primeiro vetor
	return $item * 2;
}, $lista);
print_r($lista2);
//in_array verifica se há o elemento no array
$lista = [10, 5, 40, 25];
if (in_array(5, $lista)) {
	echo "O elemento existe";
}else{
	echo "O elemento não existe";
};

//array_search verifica se existe o elemnto no array e retorna o elemento
echo array_search(10, $lista = [1, 6, 7, 10]); //neste exemplo o elemento existe na posição 3 

//rsort ordena a lista em ordem decrecente
$lista = [1, 6, 7, 10];
rsort($lista); //Ordena a lista
print_r($lista);

//sort ordena a lista em ordem crescente
$lista = [1, 6, 7, 10];
sort($lista); //Ordena a lista
print_r($lista);

//Cria uma string a partit de um vetor
echo implode(" ", $lista = ['João', 'vai', 'a', 'escola']);
//time 
echo time(); //exibe o tempo desde a criação do php até a atualidade. 

echo date('d/m/y H:i:s'); //a função retorna a data e a hora

//exercício módulo 3
$dia = date('D');
//echo $dia;
echo date('d/m/y').' ';
function diaDaSemana($n){
	switch ($n) {
		case 'Mon':
			echo "Segunda-feira";
			break;
		case 'Tue':
			echo "Terça-feira";
			break;
		case 'Wed':
			echo "Quarta-feira";
			break;
		case 'Thu':
			echo "Quinta-feira";
			break;
		case 'Fri':
			echo "Sexta-feira";
			break;
		case 'Sat':
			echo "Sábado";
			break;
		case 'Sun':
			echo "Domingo";
			break;
		default:
			echo "Há algo errado";
			break;
	};

};

diaDaSemana($dia);

//chamando o arquivo header.php
require('./paginas/header.php');
//chamando o arquivo config.php
require_once('./paginas/config.php');
//imprimindo uma variável de outro arquivo (config.php)
echo $nome;
*/
?>
