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
  <body class="home">
  <div class="board">
    <h1>Bem-vindo</h1>
    <h2>Escolha sua função:</h2>
        <div class="itens">
            <a href="motor.php"><div class="item motor">
                <span class="img motor_img"></span><p>Motorista</p>
            </div></a>
            <a href="fiscal.php"><div class="item fiscal">
                <span class="img fiscal_img"></span><p>Fiscal</p>
            </div></a>
        </div>
      </div>
  </body>
</html>