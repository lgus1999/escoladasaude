<!DOCTYPE html>
<html lang="en">
<?php
  require_once("pdo.php");
  session_start();
  
  
  
  
      $sql = "SELECT * FROM tb_paciente WHERE id_paciente = :id";
      $stmt = $cbd->prepare($sql);
      $stmt->execute(array(":id" => $_SESSION['id_paciente']));
      $dados = $stmt->fetch(PDO::FETCH_ASSOC);
  ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../../js/jquery-3.6.0.js" type="text/javascript"></script>
    <title>Ficha ginecológica</title>
    <title></title>
</head>

<body>
    <div class="container" style="font-family: 'Product Sans';
    src: url('FONTES/PRODUCT SANS');">
        <form action="incluir/incluir_ginecologica.php" method="POST">
        
        <script>
            $(document).ready(function(){
                
               var id = $('#identificador').val();
               console.log(id);
               $.getJSON('testando.php?valor='+id, function (dados){
                  dados;

                  if(dados.length > 0 ){
                      var resut = dados[0];
                      console.log(resut["qtd_gravidezes"]);

                        $("#gravidez").val(resut["qtd_gravidezes"]);
                        $("#gravidez").val(resut["qtd_gravidezes"]);
                        $("#gravidez").val(resut["qtd_gravidezes"]);
                        $("#gravidez").val(resut["qtd_gravidezes"]);
                     
                  }else{
                      alert('novo cadastro');
                  }
                 

               })

            })    

        
        </script>

            <h1 style="color:  #409ace"><b>Ficha Ginecológica</b></h1>
            <ul class="nav nav-tabs">
                <li class="active"><a style="color: black;" data-toggle="tab" href="#home">Dados do paciente</a></li>
                <li><a style="color: #409ace" data-toggle="tab" href="#menu1">Dados clínicos</a></li>
                <li><a style="color: #409ace" data-toggle="tab" href="#menu2">Características ginecológicas</a></li>
                <li><a style="color: #409ace" data-toggle="tab" href="#menu3">Evolução</a></li>


            </ul><br>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">

                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">ID</label>
                            <input type="text" name="id_paciente" id="identificador" class="form-control" required value="<?php echo $dados['id_paciente']?>" disabled="true">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Nome do paciente</label>
                            <input type="text" name="" class="form-control" required value="<?php echo $dados['nome']?>" disabled="true">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">CPF</label>
                            <input type="text" name="" class="form-control" required value="<?php echo $dados['cpf']?>" disabled="true">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Data de nascimento</label>
                            <input type="date" name="" class="form-control" required value="<?php echo $dados['dt_nasc']?>" disabled="true">
                        </div>
                    </div><br>
                    <a href="menu.php" class="btn btn-default">Voltar à tela inicial</a><br>
                </div>






                <div id="menu1" class="tab-pane fade"><br>


                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Quantidade de gravidezes:</label>
                            <input type="int" name="qtdGravidez" id="gravidez" class="form-control" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Quantidade de partos:</label>
                            <input type="int" name="qtdPartos" id="partos" class="form-control" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Quantidade de abortos:</label>
                            <input type="int" name="qtdAbortos" id="aborto" class="form-control" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Data da última prevenção:</label>
                            <input type="date" name="DataPrev" id="" class="form-control" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Início da vida sexual:</label>
                            <input type="text" name="inicioSexo" class="form-control" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Uso de anticocepcional:</label>
                            <input type="text" name="usoAnticocepcional" class="form-control" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Antecedentes cirúrgicos:</label>
                            <input type="text" name="antecedentes" class="form-control" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Queixas:</label>
                            <input type="text" name="queixas" class="form-control" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Peso:</label>
                            <input type="int" name="peso" class="form-control" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Pressão arterial:</label>
                            <input type="int" name="pressao" class="form-control" required autocomplete="off"></div>
                    </div><br>
                    <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a><br>

                </div>



                <div id="menu2" class="tab-pane fade"><br>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Vulva:</label>
                            <select name="vulva" class="form-control">
            <option></option>
            <option value="Condiloma">Condiloma</option>
            <option value="Outros">Outros</option>
            </select></div>
                    </div>


                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Conteúdo Vaginal:</label>
                            <select name="conteudoVaginal" class="form-control">
            <option></option>
            <option value="Normal">Normal</option>
            <option value="Amarelo">Amarelo</option>
            <option value="Esverdeado">Esverdeado</option>
            <option value="Bolhoso">Bolhoso</option>
            <option value="Sanguinolento">Sanguinolento</option>
            </select></div>
                    </div>


                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Colo uterino:</label>
                            <select name="coloUterino" class="form-control">
            <option></option>
            <option value="Normal">Normal</option>
            <option value="Polipos">Pólipos</option>
            <option value="Ulceração">Ulceração</option>
            <option value="Sanguinolento">Sanguinnolento</option>
            <option value="Outros">Outros</option>
            </select></div>
                    </div>


                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Teste de Schiller:</label>
                            <input type="text" name="schiller" class="form-control" required autocomplete="off"></div>
                    </div>


                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Iodo:</label>
                            <select name="Iodo" class="form-control">
            <option></option>
            <option value="Positivo">(+) positivo</option>
            <option value="Negativo">(-) negativo</option>
            </select></div>
                   </div><br>
                    <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a><br>

                </div>

        <div id="menu3" class="tab-pane fade"><br>
                                
            
                <table class="table table-striped table-bordered table-condensed table-hover table-sm tabelas">

                <thead>

                    <tr>
                    
                    <th style="width: 20%" scope="col">data</th>
                    <th style="width: 80%"scope="col">Evolução</th>
                    

                    </tr>
                </thead>



                </table>
      
         
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Evolução</label>
            <textarea class="form-control" name="evolucao" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

                    <button class="btn btn-success" type="submit" name="salvar">Salvar</button>
                    <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a>


                </div>
            </div><br>
        </form>
</body>

</html>