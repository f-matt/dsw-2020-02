<!DOCTYPE html>
<html>
  <head>
    <title>Lista de Contatos</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>Atualização de Contatos</h1>

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
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        try {
          atualizaContato($id, $nome, $email);
          echo "<script>alert('Contato atualizado com sucesso!');</script>";
        } catch (Exception $e) {
          echo "<script>alert('" . $e->getMessage() ."');</script>";
        }
      }
    ?>

    <form method="post" action="atualiza.php">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" value="<?php echo $contatoSelecionado['nome']?>" />
      <br><br>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" value="<?php echo $contatoSelecionado['email']?>" />
      <br><br>

      <input type="hidden" name="id" value="<?php echo $contatoSelecionado['id']?>" />
      <input type="submit" value="Atualizar" />
    </form>

    <h3><a href="busca.php">Voltar</a></h3>

  </body>

</html>
