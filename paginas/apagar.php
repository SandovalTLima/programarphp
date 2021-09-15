<?php
setcookie('nome', time() -3600); //o cookie é setado para expirar em um minuto anterior.

header('Location: formulario.php');//redireciona para a página formulário
exit;

?>