
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<h1>Cabeçalho</h1>
<hr/>
<body>

</body>
</html>
<?php

if ( isset($_COOKIE['nome'])){ //se o cookie existir
	$nome = $_COOKIE['nome'];
	echo '<h2>'.$nome.'</h2>'; //o cookie é impresso.
};
