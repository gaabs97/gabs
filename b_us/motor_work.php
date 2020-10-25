<?php
session_start();
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>B_us</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <style>
         button {
            top: 164%;
         }
         h1 {
            font-size: 66px;
         }

         img {
            position: relative;
            top: 25px;
         }
      </style>
   </head>
   <body>
      <div class="work">
         <div class="work_elementor">
            <a href="motor_conect.php"><img src="icones/back.png" width="25px" style="margin-right: 40px"></a>
            <img src="icones/01-b.png" width="45px" style="margin-right: 40px">
            <h1>Qual linha você está?</h1>
         </div>
         <form class="form" action="valida_linha.php" method="POST">
            <input type="text" name="n_linha" placeholder="Número da linha">
            <input type="text" name="n_placa" placeholder="Placa do ônibus">
            <button class="fas fa-check" type="submit"></button>
         </form>
      </div>
   </body>
</html>