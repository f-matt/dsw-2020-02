<?php
function exemplo01() {
  try {
    $user = 'root';
    $pass = '123456';

    $db = new PDO('mysql:host=localhost;dbname=db_contatos',
      $user, $pass);

    $rset = $db->query('SELECT * FROM contatos');

    foreach($rset as $r) {
      echo "Nome: $r[nome] Email: $r[email]";
      echo '<br><br>';
    }

    $rset = null;
    $db = null;
  } catch (PDOException $e) {
    echo "Erro conectando ao banco de dados: $e->getMessage() <br>";
    die();
  }
}


function exemplo02() {
  try {
    $user = 'root';
    $pass = '123456';

    $db = new PDO('mysql:host=localhost;dbname=db_contatos',
      $user, $pass);

    $stmt = $db->prepare('INSERT INTO contatos (nome, email) VALUES (:nome, :email)');
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);

    $nome = 'João';
    $email = 'joao@mail.com';
    $stmt->execute();

    echo "Registro inserido com sucesso!";

    $stmt = null;
    $db = null;
  } catch (PDOException $e) {
    echo "Erro conectando ao banco de dados: $e->getMessage() <br>";
    die();
  }
}


function exemplo03() {
  try {
    $user = 'root';
    $pass = '123456';

    $db = new PDO('mysql:host=localhost;dbname=db_contatos',
      $user, $pass);

    $db->beginTransaction();

    $res = $db->query("SELECT COUNT(*) FROM contatos WHERE nome = 'Josea'");

    $count = $res->fetch()[0];

    if ($count == 0) {
      $db->exec("INSERT INTO contatos (nome, email) VALUES ('Josea', 'jose@mail.com')");
      echo "Registro inserido com sucesso!";
    } else {
      echo "Registro já existe.";
    }

    $db->commit();

    $res = null;
    $db = null;
  } catch (Exception $e) {
    $db->rollBack();
    echo "Erro: $e->getMessage() <br>";
    die();
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>PHP: Bancos de Dados</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>Conexão com Bancos de Dados</h1>

    <?php
      // exemplo02();
      exemplo03();
    ?>

  </body>

</html>
