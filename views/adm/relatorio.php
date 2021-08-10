<?php
include_once("pdo.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agendamento de pacientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="../../js/jquery-3.6.0.js" type="text/javascript"></script>


</head>

<body class="center-form">
    <style>
        body {
            width: auto;
            height: auto;
            background-image: url(../../imagens/agendamento.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        
        body.center-form {
            min-height: 100vh;
            font-family: 'Product Sans';
            src: url('FONTES/PRODUCT SANS');
        }
        
        div.center-form {
            position: relative;
            min-height: 100vh;
            border-color: black;
        }
        
        div.center-form>form {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translateY(-45%) translateX(-50%);
            padding-right: 30px;
            padding-left: 30px;
            padding-top: 30px;
            padding-bottom: 30px;
            border-radius: 20px;
            border-width: thin;
            border-style: solid;
            border-color: #409ace;
            background-color: white
        }
        
        .row {
            color: black;
        }
        
        .grande {
            width: 100%;
        }
    </style>
    <div class="center-form">
        <form action='../../pdf/consultaAtendimentos.php' target="iframe" class="border" method="POST">
        <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <label for="cursos">Cursos</label>
                    <select name="curso" id="cursos" class="form-control">
                        <option value="todos">Todos</option>
                        <option value="Ginecologico">Ginecologico</option>
                        <option value="Gestante">Gestacional</option>
                        <option value="psicologia">Psicologia</option>

                    </select>

                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="">Data inicial</label>
                    <input type="date" name="data_inicial"  class="form-control" required autocomplete="">
                </div>

            
                
         
                <div class="col-md-6">
                    <label for="" id="">Data final</label>
                    <input type="date" name="data_final"  class="form-control" required autocomplete="">
                </div>
            </div><br>
        </div>




            <div class="row d-flex justify-content-center">
                <button role="button" class="btn btn-primary grande" name="consulta" style="color:white">Consultar</button></div><br>

            <div class="row d-flex justify-content-center"></div>

            <a href="menu.php" role="button" class="btn btn-link grande">Voltar à tela inicial</a>
    </div>
    </form>
    </div>



</body>



</html>