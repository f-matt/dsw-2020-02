<!DOCTYPE html>
<html>
  <head>
    <title>Introdução à linguagem PHP</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>Introdução à Linguagem PHP</h1>

    <?php
      // Exibe a mensagem de acordo com a hora atual
      function ex01() {
        date_default_timezone_set("America/Sao_Paulo");

        $t = date('H');

        if ($t < '20')
          echo '<p>Tenha um bom dia!</p>';
        else
          echo '<p>Tenha uma boa noite!</p>';
      }

      // Exibe o dia da semana
      function ex02() {
        date_default_timezone_set("America/Sao_Paulo");
        $dia = date('w');

        switch ($dia) {
          case 0:
            echo "<h2>Hoje é domingo!</h2>";
            break;
          case 1:
            echo "<h2>Hoje é segunda!</h2>";
            break;
          case 2:
            echo "<h2>Hoje é terça!</h2>";
            break;
          case 3:
            echo "<h2>Hoje é quarta!</h2>";
            break;
          case 4:
            echo "<h2>Hoje é quinta!</h2>";
            break;
          case 5:
            echo "<h2>Hoje é sexta!</h2>";
            break;
          case 6:
            echo "<h2>Hoje é sábado!</h2>";
            break;
          default:
            echo "<h2>Dia inválido</h2>";
        }

      }

      // Verifica se o número é par ou ímpar
      function ex03() {

        $x = 10;

        // TODO: se $x é par, exibe "O número é par"
        // Caso contrário, exibe "O número é ímpar"

      }



      // ex01();
      ex02();
    ?>

  </body>


</html>
