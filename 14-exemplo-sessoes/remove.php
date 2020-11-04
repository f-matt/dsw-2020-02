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
    <h1>Remoção de Contatos</h1>

    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = $_GET['id'];

        $contatoSelecionado = NULL;

        foreach($_SESSION['contatos'] as $contato) {
          if ($contato['id'] == $id) {
            $contatoSelecionado = $contato;
            break;
          }
        }

        if ($contatoSelecionado == NULL) {
          echo "<script>alert('Contato não encontrado.');</script>";
        }
      } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];

        for ($i = 0; $i < count($_SESSION['contatos']); ++$i) {
          if ($_SESSION['contatos'][$i]['id'] == $id) {
            array_splice($_SESSION['contatos'], $i, 1);
            echo "<script>alert('Contato removido com sucesso!');</script>";
            break;
          }
        }
      }
    ?>

    <form method="post" action="remove.php">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" value="<?php echo $contatoSelecionado['nome']?>" />
      <br><br>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" value="<?php echo $contatoSelecionado['email']?>" />
      <br><br>

      <input type="hidden" name="id" value="<?php echo $contatoSelecionado['id']?>" />
      <input type="submit" value="Remover" />
    </form>

    <h3><a href="busca.php">Voltar</a></h3>

  </body>

</html>
