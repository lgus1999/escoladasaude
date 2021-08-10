<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Buscar | CPF</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>

<body class="center-form">
    <style>
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
            transform: translateY(-50%) translateX(-50%);
            background-size: 50% auto;
            padding-right: 100px;
            padding-left: 100px;
            padding-top: 30px;
            padding-bottom: 30px;
            border-radius: 20px;
            border-width: thin;
            border-style: solid;
            border-color: #000;
        }
        
        .row {
            color: black;
        }
        
        .grande {
            width: 100%;
        }
    </style>
            <div class="center-form">
        <form action='buscar.php?loc=1' class="border" method="POST">

            <div class="row">
                <div class="col-sm-12">
                    <h2 style="text-align:center; color: #b21218"><b>Identificação do paciente</b></h2>
                </div>
            </div><br>
            <div class="row">
                <div class="col col-sm-12">
                    <script type="text/javascript">
                        function mascara(i) {

                            var v = i.value;

                            if (isNaN(v[v.length - 1])) { 
                                i.value = v.substring(0, v.length - 1);
                                return;
                            }

                            i.setAttribute("maxlength", "14");
                            if (v.length == 3 || v.length == 7) i.value += ".";
                            if (v.length == 11) i.value += "-";

                        }
                    </script>

                    <label for="cpf">Digite o CPF do paciente</label>
                    <input oninput="mascara(this)" type="text" name="buscar" class="form-control" required autocomplete="off" /></div>
            </div><br><br>
          

            <div class="row d-flex justify-content-center">
                <button role="button" class="btn btn-primary grande" style="color:white">Buscar</button></div> <br>
            <div class="row d-flex justify-content-center">
                <a href="menu.php" role="button" class="btn btn-default grande">Voltar à tela inicial</a>
            </div>
        </form>
    </div>

    <?php
                session_start();
                if(isset($_GET['ficha'])){
                $_SESSION['local'] = $_GET["ficha"];
            }
            $_SESSION["agendamento"] = 1;
            
            if(isset($_GET['erro'])){
                switch($_GET['erro']){
                    case 3:
                        echo "<script>alert('Paciente não Encontrado!');</script>";
                        break;
                }
            }               
            ?>



</body>



</html>