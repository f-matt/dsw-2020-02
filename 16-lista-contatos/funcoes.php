<?php

function cadastra($nome, $email) {

  try {
    $db = new PDO('mysql:host=localhost;dbname=db_contatos', 'root', '123456');

    $stmt = $db->prepare('INSERT INTO contatos (nome, email)
      VALUES (:nome, :email)');
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);

    if (!$stmt->execute())
      throw new Exception($stmt->errorInfo()[2]);


  } catch (Exception $e) {
    error_log($e->getMessage());
    throw new Exception('Ocorreu um erro ao inserir o contato.');
  } finally {
    $stmt = null;
    $db = null;
  }

}


function buscaContatosPorNome($nome) {

  try {
    $db = new PDO('mysql:host=localhost;dbname=db_contatos', 'root', '123456');

    $stmt = $db->prepare("SELECT id, nome, email
      FROM contatos
      WHERE nome LIKE CONCAT('%', :nome, '%')");
    $stmt->bindParam(':nome', $nome);

    if (!$stmt->execute())
      throw new Exception($stmt->errorInfo()[2]);

    $rset = $stmt->fetchAll();

    $contatos = array();

    foreach($rset as $r) {
      $contato = array(
        'id' => $r['id'],
        'nome' => $r['nome'],
        'email' => $r['email']
      );

      array_push($contatos, $contato);
    }

    return $contatos;
  } catch (Exception $e) {
    error_log($e->getMessage());
    throw new Exception('Ocorreu um erro ao pesquisar os contatos.');
  } finally {
    $rset = null;
    $stmt = null;
    $db = null;
  }

}


function buscaPorId($id) {

  try {
    $db = new PDO('mysql:host=localhost;dbname=db_contatos', 'root', '123456');

    $stmt = $db->prepare("SELECT id, nome, email
      FROM contatos
      WHERE id = :id");
    $stmt->bindParam(':id', $id);

    if (!$stmt->execute())
      throw new Exception($stmt->errorInfo()[2]);

    $rset = $stmt->fetchAll();
    $contato = null;

    foreach($rset as $r) {
      $contato = array(
        'id' => $r['id'],
        'nome' => $r['nome'],
        'email' => $r['email']
      );
    }

    return $contato;
  } catch (Exception $e) {
    error_log($e->getMessage());
    throw new Exception('Ocorreu um erro ao pesquisar o contato.');
  } finally {
    $rset = null;
    $stmt = null;
    $db = null;
  }

}


function atualizaContato($id, $nome, $email) {

  try {
    $db = new PDO('mysql:host=localhost;dbname=db_contatos', 'root', '123456');

    $stmt = $db->prepare("UPDATE contatos SET
      nome = :nome,
      email = :email
      WHERE id = :id");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id);

    if (!$stmt->execute())
      throw new Exception($stmt->errorInfo()[2]);
  } catch (Exception $e) {
    error_log($e->getMessage());
    throw new Exception('Ocorreu um erro ao atualizar o contato.');
  } finally {
    $stmt = null;
    $db = null;
  }

}


function removeContato($id) {

  try {
    $db = new PDO('mysql:host=localhost;dbname=db_contatos', 'root', '123456');

    $stmt = $db->prepare("DELETE FROM contatos
      WHERE id = :id");
    $stmt->bindParam(':id', $id);

    if (!$stmt->execute())
      throw new Exception($stmt->errorInfo()[2]);
  } catch (Exception $e) {
    error_log($e->getMessage());
    throw new Exception('Ocorreu um erro ao remover o contato.');
  } finally {
    $stmt = null;
    $db = null;
  }

}


?>
