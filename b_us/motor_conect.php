<?php
session_start();
include_once "conexao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <title>B_us</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
      <script>
         var onoff = document.getElementById('onoff1');
         var estado = document.getElementById('estado');
         onoff.addEventListener('change', function() {
             estado.innerHTML = this.checked ? 'Modo diurno' : 'Modo noturno';
         });  
      </script>
   </head>
   <body>
      <div class="board">
         <div class="itens">
            <a href="motor_work.php">
               <div class="item trabalho">
                  <div class="img work_img"></div>
                  <p class="conect" >Trabalhando</p>
               </div>
            </a>
            <a href="#">
               <div class="item cursos">
                  <div class="img curso_img"></div>
                  <p class="conect" >Cursos</p>
               </div>
            </a>
            <a href="#">
               <div class="item perfil">
                  <div class="img perfil_img"></div>
                  <p class="conect"  style="margin-top:-55px!important">Perfil</p>
               </div>
            </a>
            <a href="#">
               <div class="item config">
                  <div class="img config_img"></div>
                  <p class="conect" >Configurações</p>
               </div>
            </a>
         </div>
         <div class="onoff">
            <input type="checkbox" class="toggle" id="onoff1">
            <label for="onoff1"></label>
         </div>
         <div class="footer">
            <div class="chat">
            </div>
         </div>
      </div>
   </body>
</html>