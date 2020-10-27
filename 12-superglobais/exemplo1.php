<!DOCTYPE html>
<html>
  <head>
    <title>PHP: Variáveis Superglobais</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>Exemplo</h1>

    <h3>Requisição utilizando GET</h3>
    <a href="exemplo2.php?numero=3">Clique aqui!</a>

    <h3>Requisição utilizando POST</h3>
    <form method="POST" action="exemplo2.php">
      <label for="numero">Numero:</label>
      <input type="text" id="numero" name="numero" />
      <input type="submit" value="Enviar" />
    </form>

  </body>
</html>
