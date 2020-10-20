<!DOCTYPE html>
<html>
  <head>
    <title>Introdução à linguagem PHP</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>Introdução à Linguagem PHP</h1>

    <?php
      function incrementaN() {
        static $n = 0;
        echo "<h2>n = $n</h2>";
        $n++;
      }

      incrementaN();
      incrementaN();
      incrementaN();
      incrementaN();
    ?>

  </body>


</html>
