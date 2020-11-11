<!DOCTYPE html>
<html>
  <head>
    <title>Lista de Contatos</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>Novo Contato</h1>

    <?php
    include 'funcoes.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $nome = $_POST['nome'];
      $email = $_POST['email'];

      try {
        cadastra($nome, $email);
        echo "<script>alert('Contato cadastrado com sucesso!');</script>";
      } catch (Exception $e) {
        echo "<script>alert('" . $e->getMessage() ."');</script>";
      }
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
