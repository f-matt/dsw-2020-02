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
    <h1>Atualização de Contatos</h1>

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
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        for ($i = 0; $i < count($_SESSION['contatos']); ++$i) {
          if ($_SESSION['contatos'][$i]['id'] == $id) {
            $_SESSION['contatos'][$i]['nome'] = $nome;
            $_SESSION['contatos'][$i]['email'] = $email;

            echo "<script>alert('Contato atualizado com sucesso!');</script>";

            break;
          }
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
