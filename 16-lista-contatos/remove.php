<!DOCTYPE html>
<html>
  <head>
    <title>Lista de Contatos</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>Remoção de Contatos</h1>

    <?php
      include 'funcoes.php';
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = $_GET['id'];

        try {
          $contatoSelecionado = buscaPorId($id);

          if ($contatoSelecionado == NULL)
            echo "<script>alert('Contato não encontrado.');</script>";
        } catch (Exception $e) {
          echo "<script>alert('" . $e->getMessage() ."');</script>";
        }
      } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];

        try {
          removeContato($id);
          echo "<script>alert('Contato removido com sucesso!');</script>";
        } catch (Exception $e) {
          echo "<script>alert('" . $e->getMessage() ."');</script>";
        }

      }
    ?>

    <form method="post" action="remove.php">
      <label for="nome">Nome:</label>
      <input type="text"
        id="nome"
        name="nome"
        readonly="readonly"
        value="<?php echo $contatoSelecionado['nome']?>" />
      <br><br>

      <label for="email">Email:</label>
      <input type="text"
        id="email"
        name="email"
        readonly="readonly"
        value="<?php echo $contatoSelecionado['email']?>" />
      <br><br>

      <input type="hidden" name="id" value="<?php echo $contatoSelecionado['id']?>" />
      <input type="submit" value="Remover" />
    </form>

    <h3><a href="busca.php">Voltar</a></h3>

  </body>

</html>
