<?php
echo '<pre>';
print_r($_FILES);
move_uploaded_file($_FILES['arquivo']['tmp_name'], './arquivos/novoArquivo');
?>