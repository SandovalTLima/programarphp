<?php
echo '<pre>';

$nome = $_FILES['arquivos']['name'];
move_uploaded_file($_FILES['arquivos']['tmp_name'], './arquivos/nono.txt');
?>