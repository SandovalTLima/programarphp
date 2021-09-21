<form action="exercicio.php" method="post">
  <label for="name">Novo nome:</label>
  <input type="text" name="name" id="name">
  <button type="submit">Adicionar</button>
</form>
<h2>Lista de nomes</h2>
<?php
$lista = file_get_contents('../arquivos/nomes.txt');
$nomes = explode("\n", $lista);
?>
<ul>
  <?php
  foreach ($nomes as $nome) {
    echo '<li>' . $nome . '</li>';
  }
  ?>
</ul>