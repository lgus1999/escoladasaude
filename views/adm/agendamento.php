<?php
include_once("pdo.php");
session_start();

    $query = "SELECT * FROM tb_paciente";
    $stmt = $cbd->prepare($query);
    $stmt->execute();

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
        #iden{
            display: none;
        }
    </style>
    <div class="center-form">
        <form action='incluir/agendar.php' class="border" method="POST">

            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #409ace"><b>Dados do paciente</b></h3>
                </div>
            </div><br>
            <input type="text" id="iden" name="id">


            <div class="row">
                <div class="col col-md-7">
                    <label for="name">Nome do paciente</label>
                    <select name="" class="form-control" id="escolherPaciente" >
                        <option value="" selected></option>
                    <?php
                        while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
                        ?>
                         <option value="<?php echo $dados['id_paciente']?>"><?php echo $dados['nome']?></option>
                        }
                    
                    <?php }?>
                    </select>
                </div>
                <script>
                    $('#escolherPaciente').change(function(){
                        id =  $('#escolherPaciente').val();
                        $.getJSON('consulta/consultaPaciente.php?id='+id, function(retor){
                            console.log(retor);
                           
                            
                            $('#cpf').val(retor['cpf']);
                            $('#nasc').val(retor["dt_nasc"]);
                            $('#mae').val(retor["mae"]);
                            $('#iden').val(retor["id_paciente"]);
                        });
                    })
                </script>
                <div class="col col-md-5">
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

                    <label for="cpf">CPF do paciente</label>
                    <input oninput="mascara(this)" type="text" id="cpf" class="form-control" disabled ="true"  required  />
                </div>
            </div><br>


            <div class="row">
                <div class="col col-md-5">
                    <label for="name">Nascimento</label>
                    <input type="date" id="nasc" class="form-control" required disabled ="true" ></div>

                <div class="col col-md-7">
                    <label for="name">Nome da mãe</label>
                    <input type="text" id="mae" class="form-control" required disabled ="true"></div>
            </div><br>


            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #409ace"><b>Dados do Agendamento</b></h3>
                </div>
            </div><br>

            <div class="row">
                <div class="col col-md-12">
                    <label for="">Profissional:</label>
                    <select name="profissional" id="curso" class="form-control">
                    <option></option>
                    <option value="ginecologico">Ginecológico</option>
                    <option value="gestante">Gestacional</option>
                    
            </select>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label for="">Data</label>
                    <input type="date" name="Data" id="dia" class="form-control" required autocomplete="">
                </div>


                    <script>
                   
                    $("#dia").change(function(e){ 
                    var option ="";
                    var min = ['07:00','08:00','09:00','10:00','11:00','12:00','14:00','15:00','16:00','17:00'];           
                    var dia = $('#dia').val();
                    var tipo = $('#curso').val();

                            
                        $.getJSON('consulta/agendar.php?dia='+dia+'&curso='+tipo, function (dados){
                        if (dados.length > 0){    
                            $.each(dados, function(i, obj){
                                $.each(min, function(j, hrs){
                                    if(hrs == obj.hora){
                                        min.splice(j, 1);
                                    }

                                })
                            }) 
                                        
                        }            
                    $.each(min, function(j, hrs){
                        option += '<option>'+hrs+'</option>';
                    
                    })
                    $('#horas').html(option).show();
                    
            });       
                            
            })
            
            </script>
                
         
                <div class="col-md-6">
                    <label for="" id="">Hora</label>
                   <select id="horas" name="Hora" class="form-control">
                   <option>Selecione a hora</option>
                   </select>
                </div>
            </div><br>





            <div class="row d-flex justify-content-center">
                <button role="button" class="btn btn-primary grande" style="color:white">Agendar</button></div><br>

            <div class="row d-flex justify-content-center" style="text-align: center;">
                <label for="">ou</label><br>
            </div>
            <div class="row d-flex justify-content-center"></div>

            <a href="menu.php" role="button" class="btn btn-link grande">Voltar à tela inicial</a>
    </div>
    </form>
    </div>



</body>



</html>