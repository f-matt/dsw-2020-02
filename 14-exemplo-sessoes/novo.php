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
    <h1>Novo Contato</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $nome = $_POST['nome'];
      $email = $_POST['email'];

      $id = 0;
      foreach ($_SESSION['contatos'] as $contato) {
        if ($contato['id'] > $id)
          $id = $contato['id'];
      }
      $id++;

      $contato = array('id' => $id,
        'nome' => $nome,
        'email' => $email);

      array_push($_SESSION['contatos'], $contato);

      echo "<script>alert('Contato cadastrado com sucesso!');</script>";
    }
    ?>

    <form method="post" action="novo.php">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" />
      <br><br>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" />
      <br><br>

      <input type="submit" value="Cadastrar" />
    </form>

    <h3><a href="index.php">Voltar</a></h3>

  </body>

</html>
