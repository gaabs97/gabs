<?php
session_start();
include_once "conexao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>B_us</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            h1 {
            font-size: 66px;
            color: #631FF2;
            }
            h2 {
            font-size: 39px;
            text-align: center;
            color: #631FF2;
            }
            img {
            position: relative;
            top: 25px;
            }
            .item {
            width: 220px;
            height: 180px;
            }
            .footer {
            margin-top: 30px;
            }
            h5.modal-title {
                color:  #631FF2;
                font-size: 64px;
                position: relative;
                left: 50%;
                transform: translate(-50%);
                top: 30px;
            }
            h5.modal-title i {
                color: #D32274;
                font-style: normal;
            }
            .modal-body {
                color: #631FF2;
                font-size: 44px;
                top: 30px;
                font-size: 44px;
                width: 75%;
                text-align: center;
                left: 12.5%;
                font-weight: 700;
            }
            input {
                display: none;
            }
        </style>
    </head>
    <body>
        <div>
        <div class="work_elementor">
            <a href="motor_conect.php"><img src="icones/back-c.png" width="25px" style="margin-right: 40px"></a>
            <h1>Linha <?php echo 'C444'; ?></h1>
        </div>
        <div class="working">
            <h2>Reportar um problema</h2>
            <div class="itens">
                <a href="#" data-toggle="modal" data-target="#acidente">
                    <div class="item trabalho">
                        <div class="img linha acidente_img"></div>
                        <p class="conect" >Ônibus bateu</p>
                    </div>
                </a>
                <a href="#" data-toggle="modal" data-target="#emergencia">
                    <div class="item trabalho">
                        <div class="img linha alert_img"></div>
                        <p class="conect" >Emergência</p>
                    </div>
                </a>
                <a href="#" data-toggle="modal" data-target="#mecanico">
                    <div class="item trabalho">
                        <div class="img linha mecanico_img"></div>
                        <p class="conect" >Problema Mecânico</p>
                    </div>
                </a>
            </div>
            <!-- acidente -->
            <div class="modal fade" id="acidente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">O seu <i>veículo bateu</i>?</h5>
                        </div>
                        <div class="modal-body">
                            Confirme que sim e um fiscal chegará em instantes
                            <img src="icones/07.png">
                        </div>
                        <form action="notifica.php" method="POST">
                            <input type="text" value="Problema com acidente">
                            <div class="modal-footer">
                                <button style="color: #4CB45D;" type="button" class="btn-footer" data-dismiss="modal">Não</button>
                                <button style="color: #D32274;" type="submit" class="btn-footer">Sim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- mecanico -->
            <div class="modal fade" id="mecanico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Problema <i>mecânico</i>?</h5>
                        </div>
                        <div class="modal-body">
                            Confirme que sim e um fiscal chegará em instantes
                            <img src="icones/09.png">
                        </div>
                        <form action="notifica.php" method="POST">
                            <input type="text" value="Problema mecânico">
                            <div class="modal-footer">
                                <button style="color: #4CB45D;" type="button" class="btn-footer" data-dismiss="modal">Não</button>
                                <button style="color: #D32274;" type="submit" class="btn-footer">Sim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- emergencia -->
            <div class="modal fade" id="emergencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i>EMERGÊNCIA?!</i></h5>
                        </div>
                        <div class="modal-body">
                            Confirme a ação:
                            <img src="icones/09.png">
                        </div>
                        <form action="notifica.php" method="POST">
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="chat">
                <?php
    $result_usuarios = "SELECT * FROM mensagens";
    $resultado_usuarios = mysqli_query($conn, $result_usuarios);
    while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
        echo '<div class="icon-chat"><img src="icones/' . $row_usuario['img'] . '-b.png"></div>' . '<div class="inbox-chat"><p>' . $row_usuario['mensagem'] . '</p>' . '<p class="time">' . date('H:i') . '</p></div>';
    }
    ?>
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>