<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>B_us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  </head>
  <body class="home-02">
    <div class="board">
    <h1>Olá fiscal</h1>
        <form class="form" action="valida_fiscal.php" method="POST">
          <input type="text" name="id_motor" placeholder="Insira seu número de matrícula">
          <button class="fas fa-check" name="btnLogin"></button>
        </form>
      </div>
  </body>
</html>