<!DOCTYPE html>


<?php
  require_once("pdo.php");
  session_start();
  
  $paciente = $_SESSION['id_paciente'];
    $sql = "SELECT * FROM tb_paciente WHERE id_paciente = :id";
    $stmt = $cbd->prepare($sql);
    $stmt->execute(array(":id" => $paciente));
    $dados = $stmt->fetch(PDO::FETCH_ASSOC);
    
  
      
  
  ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../../js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <title>Ficha neurológica</title>
    <title></title>
</head>

<body>
    <div class="container" style="font-family: 'Product Sans';
    src: url('FONTES/PRODUCT SANS');">


        <script>
            $(document).ready(function(e){
            var valor = $("#identificador").val();
            $.getJSON('consulta/consulta_neuro.php?valor='+valor,function (dados){
                  var result = dados[0];
                     console.log(dados);
                            
             
            $("#queixa").val(result['queixa']);  
            $("#hmp").val(result['hmp']);
            
            $("#pas").val(result['pas']);
            $("#fc").val(result['fc']);
            $("#fr").val(result['fr']);
            $("#diagnosticoC").val(result['diagnostico_cl']);
            $("#complementares").val(result['compelmentares']);
            $("#antecedentes").val(result['antecedentes']);
            $("#patologia").val(result['patologia']);
            $("#medicamentos").val(result['mendicamento']);

            $("#motri_vol").val(result['motricidade_vol']);
            $("#inspecao").val(result['inspecao']);
            $("#palpacao").val(result['palpacao']);
            $("#reflexo").val(result['reflexo']);
            $("#tonus").val(result['tonus']);
            $("#trofismo").val(result['trofismo']);
            $("#motri").val(result['motricidade']);

            $("#mmii").val(result['mmii']);
            $("#mmss").val(result['mmss']);
            $("#dinamica").val(result['cordenacao']);
            $("#marcha").val(result['marcha']);
            $("#muscular").val(result['forca']);
            $("#dor").val(result['dor']);      
            $("#tatil").val(result['tatil']);
            $("#termica").val(result['termica']);
            $("#dolorosa").val(result['dolorosa']);
            $("#fisio").val(result['diagnostico_fisio']);
            $("#objetivo").val(result['objetivo']);


           
                                                                
            });

        });


        </script>
    

        <h1 style="color: #409ace"><b>Ficha Neurológica</b></h1>
        <ul class="nav nav-tabs">
            <li class="active"><a style="color: black;" data-toggle="tab" href="#home">Dados do paciente</a></li>
            <li><a style="color:#409ace" data-toggle="tab" href="#menu1">Avaliação das disfunções</a></li>
            <li><a style="color:#409ace" data-toggle="tab" href="#menu2">Dados clínicos</a></li>
            <li><a style="color:#409ace" data-toggle="tab" href="#menu3">Exames neuro-funcionais</a></li>
            <li><a style="color:#409ace" data-toggle="tab" href="#menu4">Testes especiais</a></li>
            <li><a style="color:#409ace" data-toggle="tab" href="#menu5">Evolução</a></li>




        </ul><br>

        <form action="editar/editar_neuro.php" method="POST">
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <input type="text" value="<?php echo $dados['id_paciente']?>" name="iden" id="identificador"  style="display: none;"  >
                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Nome do paciente</label>
                        <input type="text" name="" class="form-control" disabled = "true" required value="<?php echo $dados['nome']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">CPF</label>
                        <input type="text" name="" class="form-control" disabled = "true" required value="<?php echo $dados['cpf']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Data de nascimento</label>
                        <input type="date" name="" class="form-control" disabled = "true" required value="<?php echo $dados['dt_nasc']?>">
                    </div>
                </div><br>
                <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a><br>
            </div>





            <div id="menu1" class="tab-pane fade"><br>

                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Queixa principal (Q. P.)</label>
                        <input type="text" name="queixaPrincipal" id="queixa" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">H.M.P. e H.M.A.</label>
                        <input type="text" name="hmp" class="form-control" id="hmp" required autocomplete="off">
                    </div>
                </div><br>
                <a href="menu.php" class="btn btn-default">Voltar à tela inicial</a><br>

            </div>


            <div id="menu2" class="tab-pane fade"><br>

                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">P.A.S</label>
                        <input type="text" name="pas" class="form-control" id="pas" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">FC</label>
                        <input type="text" name="fc" class="form-control" id="fc" required autocomplete="off">
                    </div>
                </div><br>



                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">FR</label>
                        <input type="text" name="fr" class="form-control" id="fr" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Diagnóstico clínico</label>
                        <input type="text" name="diagnosticoClinico" class="form-control" id="diagnosticoC" required autocomplete="off">
                    </div>
                </div><br>



                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Exames complementares</label>
                        <input type="text" name="examesComplementares" class="form-control" id="complementares" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Antecedentes cirúrgicos</label>
                        <input type="text" name="antecedentesCirurgicos" class="form-control" id="antecedentes" required autocomplete="off">
                    </div>
                </div><br>


                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Patologia associada</label>
                        <input type="text" name="patologiaAssociada" class="form-control" id="patologia" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Medicamentos</label>
                        <input type="text" name="medicamentos" class="form-control" id="medicamentos" required autocomplete="off">
                    </div>
                </div><br>


                <a href="menu.php" class="btn btn-default">Voltar à tela inicial</a><br>
            </div>







            <div id="menu3" class="tab-pane fade"><br>

                <div class="row">
                    <div class="col col-sm-12">
                        <label for="" id="label">Motricidade voluntária</label>
                        <input type="text" name="motricidadeVoluntaria" class="form-control" id="motri_vol" required autocomplete="off">
                    </div>
                </div><br>


                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Inspeção</label>
                        <input type="text" name="inspecao" class="form-control" id="inspecao" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Palpação</label>
                        <input type="text" name="palpacao" class="form-control" id="palpacao" required autocomplete="off">
                    </div>
                </div><br>


                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Reflexo</label>
                        <input type="text" name="reflexo" class="form-control" id="reflexo" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Tônus muscular</label>
                        <input type="text" name="tonusMuscular" class="form-control" id="tonus" required autocomplete="off">
                    </div>
                </div><br>



                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Trofismo</label>
                        <input type="text" name="trofismo" class="form-control" id="trofismo" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Motricidade</label>
                        <input type="text" name="motricidade" class="form-control" id="motri" required autocomplete="off">
                    </div>
                </div><br>

                <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a><br>
            </div>

            <div id="menu4" class="tab-pane fade"><br>

                <div class="row">
                    <div class="col col-sm-6">
                        <h3>Coordenação estática</h3>
                    </div>
                </div>





                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Teste para MMII</label>
                        <input type="text" name="mmii" class="form-control" id="mmii" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Teste para MMSS</label>
                        <input type="text" name="mmss" class="form-control" id="mmss" required autocomplete="off">
                    </div>
                </div><br>


                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Coordenação dinâmica</label>
                        <input type="text" name="dinamica" class="form-control" id="dinamica" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Marcha</label>
                        <input type="text" name="marcha" class="form-control" id="marcha" required autocomplete="off">
                    </div>
                </div><br>


                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Força muscular</label>
                        <input type="text" name="forcaMuscular" class="form-control" id="muscular" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="">Escala de dor</label>
                        <select name="escalaDor" class="form-control" id="dor" >
                    <option></option>
                    <option value="0 - 2 Muito leve">0 - 2 Muito leve</option>
                    <option value="2 - 4 Tolerável">2 - 4 Tolerável</option>
                    <option value="4 - 6 Muito angustiante">4 - 6 Muito angustiante</option>
                    <option value="6 - 8 Muito intensa">6 - 8 Muito intensa</option>
                    <option value="8 - 10 Insuportável">8 - 10 Insuportável</option>
                    </select>
                    </div>
                </div><br>


                <div class="row">
                    <div class="col col-sm-6">
                        <h3>Exame de sensibilidade superficial </h3>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-4">
                        <label for="" id="label">Tátil</label>
                        <input type="text" name="tatil" id="tatil" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col-sm-4">
                        <label for="" id="label">Térmica</label>
                        <input type="text" name="termica" id="termica" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col-sm-4">
                        <label for="" id="label">Dolorosa</label>
                        <input type="text" name="dolorosa" id="dolorosa" class="form-control" required autocomplete="off">
                    </div>
                </div>



                <div class="row">
                    <div class="col col-sm-6">
                        <h3>Diagnóstico</h3>
                    </div>
                </div>



                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Diagnóstico fisioterapêutico</label>
                        <input type="text" name="diagnosticoFisio" id="fisio" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Objetivo do tratamento</label>
                        <input type="text" name="objetivos" class="form-control" id="objetivo" required autocomplete="off">
                    </div>
                </div><br>

                <br>

                <a href="menu.php" class="btn btn-default">Voltar à tela inicial</a>


            </div>

       <div id="menu5" class="tab-pane fade"><br>
             <table class="table table-striped table-bordered table-condensed table-hover table-sm tabelas">

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
                    $stmt->execute(array(":id" => $paciente, ":curso" =>'Neurologico'));
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

                    <button class="btn btn-success" name="editar">editar</button>
                    <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a>
                    <a href="../../pdf/ficha_neuro.php?id=<?php echo $paciente?>" target="iframe" class="btn btn-default" >Imprimir prontuário</a>


                </div>
            </div><br>
        </form>
</body>

</html>