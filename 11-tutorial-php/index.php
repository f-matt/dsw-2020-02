<!DOCTYPE html>
<html>
  <head>
    <title>Introdução à linguagem PHP</title>
    <meta charset="utf-8" />

    <style>
    .gray {
      background-color: #eeeeee;
    }
    </style>

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
        $x = 15;

        if ($x % 2 == 0) {
          echo "<h2>O número $x é par.</h2>";
        } else {
          echo "<h2>O número $x é ímpar.</h2>";
        }
      }

      // Estrutura de repetição while
      function ex04() {
        $x = 1;

        while ($x <= 5) {
          echo "O número é $x.<br>";
          $x++;
        }
      }

      // Estrutura de repetição while
      function ex05() {
        $x = 1;

        echo "<ul>";
        while ($x <= 10) {
          if ($x % 2 == 0)
            echo "<li>O número é $x.</li>";
          else
            echo "<li class='gray'>O número é $x.</li>";

          $x++;
        }
        echo "</ul>";

      }

      // Estrutura de repetição for
      function ex06() {
        for ($i = 0; $i < 10; ++$i) {
          echo "O número é $i.<br>";
        }
      }

      // Estrutura de repetição foreach
      function ex07() {
        $cores = array('vermelho', 'azul', 'verde', 'amarelo');

        echo "<ol>";
        foreach($cores as $cor) {
          echo "<li>$cor</li>";
        }
        echo "</ol>";

      }

      // ex01();
      // ex02();
      // ex03();
      // ex04();
      // ex05();
      // ex06();
      ex07();
    ?>

  </body>


</html>
