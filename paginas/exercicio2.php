<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
if (isset($name)) {
  $texto = file_get_contents('../arquivos/nomes.txt');
  $texto .= " ".$name;
  $texto = explode(" ", $texto);
  file_put_contents('../arquivos/nomes.txt', $texto);
  echo '<script>window.location.href = "./formulario3.php"</script>';
  exit();
} else {
  echo '<script>window.location.href = "./formulario.php"</script>';
  exit();
}