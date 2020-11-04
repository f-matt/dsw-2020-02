<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>PHP: Sessões</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>Pesquisa de Contatos</h1>

    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $contatos = array();
        $nomePesquisa = $_POST['nome'];

        foreach($_SESSION['contatos'] as $contato) {
          if (strpos(strtoupper($contato['nome']),
            strtoupper($nomePesquisa)) !== false) {
              array_push($contatos, $contato);
          }
        }
      }
    ?>

    <form method="post" action="busca.php">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" />
      <br><br>

      <input type="submit" value="Pesquisar" />
    </form>

    <br><br>

    <?php
      if (isset($contatos)) {
    ?>

    <table>
      <thead>
        <tr><th>Nome</th><th>Email</th><th></th><th></th></tr>
      </thead>

      <tbody>

    <?php
      foreach ($contatos as $contato) {
          echo "<tr>";
          echo "<td>$contato[nome]</td>";
          echo "<td>$contato[email]</td>";
          echo "<td><a href='atualiza.php?id=$contato[id]'>Atualiza</a></td>";
          echo "<td><a href='remove.php?id=$contato[id]'>Remove</a></td>";
          echo "</tr>";
        }

    ?>

      </tbody>
    </table>

  <?php } ?>

  <h3><a href="index.php">Voltar</a></h3>

  </body>

</html>
