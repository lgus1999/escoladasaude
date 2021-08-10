<!DOCTYPE html>
<html lang="en">
<?php
  require_once("pdo.php");
  session_start();
  
  $paciente = $_SESSION['id_paciente'];
    
  
  
      $sql = "SELECT * FROM tb_paciente WHERE id_paciente = :id";
      $stmt = $cbd->prepare($sql);
      $stmt->execute(array(":id" => $paciente));
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

    <style>
        .tabela{
            height:200px;
             overflow-y:auto;
        }
    
    </style>
    
</head>

<body>

    <script>
        $(document).ready(function(e){
            var livro = $("#identificador").val();
            $.getJSON('consultas/consulta_ginecologica.php?valor='+livro,function (dados){
                  var result = dados[0];
                     console.log(dados);
                            
             
            $("#gravidez").val(result['qtd_gravidez']);      
            $("#qtd_partos").val(result['qtd_partos']);  
            $("#quantidadeaborto").val(result['qtd_abortos']);  
            $("#prevencao").val(result['ult_prevensao']);  
            $("#vidaSexual").val(result['vida_sexual']);  
            $("#anticocen").val(result['anticocepcional']);  
            $("#cirurgico").val(result['ant_cirurgicos']);   
            $("#quexas").val(result['queixa']);  
            $("#pesokg").val(result['peso']);    
            $("#pressaoArt").val(result['pre_arterial']);    
            $("#id_schiller").val(result['Schiller']);  
            $("#sel_vulva").val(result['vulva']);
            $("#sel_conteudo").val(result['cont_vaginal']);
            $("#sel_colo").val(result['colo_uterino']);
            $("#sel_iodo").val(result['iodo']);                                                    
            });

        });

        
    
    
    </script>
    <div class="container" style="font-family: 'Product Sans';
    src: url('FONTES/PRODUCT SANS');">
        <form action="editar/editar_ginecologica.php" method="POST">
        
        

            <h1 style="color:  #409ace"><b>Ficha Ginecológica</b></h1>
            <ul class="nav nav-tabs">
                <li class="active"><a style="color: black;" data-toggle="tab" href="#home">Dados do paciente</a></li>
                <li><a style="color: #409ace" data-toggle="tab" href="#menu1">Dados clínicos</a></li>
                <li><a style="color: #409ace" data-toggle="tab" href="#menu2">Características ginecológicas</a></li>
                <li><a style="color: #409ace" data-toggle="tab" href="#menu3">Observações</a></li>


            </ul><br>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">

                    
                            <input type="text" name="id_paciente" id="iden" class="form-control" required value="<?php echo $dados['id_paciente']?>" style="display: none;">
        

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
                            <input type="int" name="qtdGravidez" id="gravidez" class="form-control" value="" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Quantidade de partos:</label>
                            <input type="int" name="qtdPartos" id="qtd_partos" class="form-control" value="" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Quantidade de abortos:</label>
                            <input type="int" name="qtdAbortos" id="quantidadeaborto" class="form-control" value="" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Data da última prevenção:</label>
                            <input type="date" name="DataPrev" id="prevencao" class="form-control" value="" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Início da vida sexual:</label>
                            <input type="text" name="inicioSexo" id="vidaSexual" class="form-control" value="" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Uso de anticocepcional:</label>
                            <input type="text" name="usoAnticocepcional" id="anticocen" class="form-control" value="" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Antecedentes cirúrgicos:</label>
                            <input type="text" name="antecedentes" id="cirurgico" class="form-control" value="" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Queixas:</label>
                            <input type="text" name="queixas" id="quexas" class="form-control" value="" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Peso:</label>
                            <input type="int" name="peso" id="pesokg" class="form-control" value="" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Pressão arterial:</label>
                            <input type="int" name="pressao" id="pressaoArt" class="form-control" value="" required autocomplete="off"></div>
                    </div><br>
                    <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a><br>

                </div>



                <div id="menu2" class="tab-pane fade"><br>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Vulva:</label>
                            <select name="vulva" id="sel_vulva" class="form-control">
            <option></option>
            <option value="Condiloma">Condiloma</option>
            <option value="Outros">Outros</option>
            </select></div>
                    </div>


                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Conteúdo Vaginal:</label>
                            <select name="conteudoVaginal" id="sel_conteudo" class="form-control">
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
                            <select name="coloUterino" id="sel_colo" class="form-control">
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
                            <input type="text" name="schiller" id="id_schiller" class="form-control" required value="" autocomplete="off"></div>
                    </div>


                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Iodo:</label>
                            <select name="Iodo" id="sel_iodo" class="form-control">
            <option></option>
            <option value="Positivo">(+) positivo</option>
            <option value="Negativo">(-) negativo</option>
            </select></div>
                   </div><br>
                    <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a><br>

                </div>

                                <div id="menu3" class="tab-pane fade"><br>

                <table class="table table-striped table-bordered table-condensed table-hover table-sm tabelas" >

                    <thead>

                    <tr>
                        
                        <th style="width: 20%" scope="col">data</th>
                        <th style="width: 80%"scope="col">Evolução</th>


                    </tr>
                    </thead>
                    <tbody>
                       
                    <?php
  
                            
                            $query = "SELECT * FROM tb_evolucao WHERE id_paciente = :id AND curso=:curso";
                            $stmt = $cbd->prepare($query);
                            $stmt->execute(array(":id" => $paciente, ":curso" =>'Ginecologico'));
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                $timestamp = strtotime($row['data']);
                                 $new_date = date("d-m-Y", $timestamp);

                            echo"<tr style='text-align: center;'>
                                
                                <td>". $new_date ."</td>
                                <td>". $row['obs']."</td>
                               </tr>";
                            }
                            ?>
                      
                    </tbody>
                </table>

            <div class="form-group">
            <label for="exampleFormControlTextarea1">Evolução</label>
            <textarea class="form-control" name="evolucao" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

                    <button class="btn btn-success" type="submit" name="editar">Salvar</button>
                    <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a>
                    <a href="../../pdf/ficha_ginecologica.php?id=<?php echo $paciente?>" target="iframe" class="btn btn-default" >Imprimir prontuário</a>

                </div>
            </div><br>
        </form>
</body>

</html>