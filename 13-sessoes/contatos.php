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
    <h1>Exemplo: Lista de Contatos</h1>

    <?php
      if (!isset($_SESSION['contatos'])) {
        $c1 = array('nome' => 'João', 'email' => 'joao@mail.com');
        $c2 = array('nome' => 'José', 'email' => 'jose@mail.com');
        $c3 = array('nome' => 'Maria', 'email' => 'maria@mail.com');

        $_SESSION['contatos'] = array($c1, $c2, $c3);
      }
    ?>


    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $nome = $_POST['nome'];
      $email = $_POST['email'];

      $contato = array('nome' => $nome, 'email' => $email);

      array_push($_SESSION['contatos'], $contato);
    }
    ?>

    <form method="post" action="contatos.php">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" />
      <br><br>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" />
      <br><br>

      <input type="submit" value="Cadastrar" />
    </form>

    <table>
      <thead>
        <tr><th>Nome</th><th>Email</th></tr>
      </thead>

      <tbody>

    <?php
      foreach ($_SESSION['contatos'] as $contato) {
        echo "<tr><td>$contato[nome]</td><td>$contato[email]</td></tr>";
      }
    ?>

      </tbody>
    </table>

  </body>

</html>
