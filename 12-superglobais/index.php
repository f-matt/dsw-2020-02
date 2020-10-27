<!DOCTYPE html>
<html>
  <head>
    <title>PHP: Variáveis Superglobais</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>PHP: Variáveis Superglobais</h1>

    <?php
      $x = 75;
      $y = 25;

      function ex01() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
      }


      function ex02() {
        echo "Servidor: $_SERVER[SERVER_SOFTWARE]<br>";
        echo "Método: $_SERVER[REQUEST_METHOD]<br>";
        echo "Browser: $_SERVER[HTTP_USER_AGENT]<br>";
      }

      // ex01();
      // echo $z;
      ex02();
    ?>

  </body>


</html>
