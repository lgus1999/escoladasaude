<!DOCTYPE html>


<?php
  require_once("pdo.php");
  session_start();
  
  
    $sql = "SELECT * FROM tb_paciente WHERE id_paciente = :id";
    $stmt = $cbd->prepare($sql);
    $stmt->execute(array(":id" => $_SESSION['id_paciente']));
    $dados = $stmt->fetch(PDO::FETCH_ASSOC);
    
  
      
  
  ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Ficha neurológica</title>
    <title></title>
</head>

<body>
    <div class="container" style="font-family: 'Product Sans';
    src: url('FONTES/PRODUCT SANS');">


        <h1 style="color: #409ace"><b>Ficha Neurológica</b></h1>
        <ul class="nav nav-tabs">
            <li class="active"><a style="color: black;" data-toggle="tab" href="#home">Dados do paciente</a></li>
            <li><a style="color:#409ace" data-toggle="tab" href="#menu1">Avaliação das disfunções</a></li>
            <li><a style="color:#409ace" data-toggle="tab" href="#menu2">Dados clínicos</a></li>
            <li><a style="color:#409ace" data-toggle="tab" href="#menu3">Exames neuro-funcionais</a></li>
            <li><a style="color:#409ace" data-toggle="tab" href="#menu4">Testes especiais</a></li>
            <li><a style="color:#409ace" data-toggle="tab" href="#menu5">Evolução</a></li>




        </ul><br>

        <form action="incluir/ficha_neuro.php" method="POST">
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <input type="text" value="<?php echo $dados['id_paciente']?>" name="iden"  style="display: none;"  >
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
                        <input type="text" name="queixaPrincipal" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">H.M.P. e H.M.A.</label>
                        <input type="text" name="hmp" class="form-control" required autocomplete="off">
                    </div>
                </div><br>
                <a href="menu.php" class="btn btn-default">Voltar à tela inicial</a><br>

            </div>


            <div id="menu2" class="tab-pane fade"><br>

                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">P.A.S</label>
                        <input type="text" name="pas" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">FC</label>
                        <input type="text" name="fc" class="form-control" required autocomplete="off">
                    </div>
                </div><br>



                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">FR</label>
                        <input type="text" name="fr" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Diagnóstico clínico</label>
                        <input type="text" name="diagnosticoClinico" class="form-control" required autocomplete="off">
                    </div>
                </div><br>



                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Exames complementares</label>
                        <input type="text" name="examesComplementares" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Antecedentes cirúrgicos</label>
                        <input type="text" name="antecedentesCirurgicos" class="form-control" required autocomplete="off">
                    </div>
                </div><br>


                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Patologia associada</label>
                        <input type="text" name="patologiaAssociada" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Medicamentos</label>
                        <input type="text" name="medicamentos" class="form-control" required autocomplete="off">
                    </div>
                </div><br>


                <a href="menu.php" class="btn btn-default">Voltar à tela inicial</a><br>
            </div>







            <div id="menu3" class="tab-pane fade"><br>

                <div class="row">
                    <div class="col col-sm-12">
                        <label for="" id="label">Motricidade voluntária</label>
                        <input type="text" name="motricidadeVoluntaria" class="form-control" required autocomplete="off">
                    </div>
                </div><br>


                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Inspeção</label>
                        <input type="text" name="inspecao" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Palpação</label>
                        <input type="text" name="palpacao" class="form-control" required autocomplete="off">
                    </div>
                </div><br>


                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Reflexo</label>
                        <input type="text" name="reflexo" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Tônus muscular</label>
                        <input type="text" name="tonusMuscular" class="form-control" required autocomplete="off">
                    </div>
                </div><br>



                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Trofismo</label>
                        <input type="text" name="trofismo" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Motricidade</label>
                        <input type="text" name="motricidade" class="form-control" required autocomplete="off">
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
                        <input type="text" name="mmii" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Teste para MMSS</label>
                        <input type="text" name="mmss" class="form-control" required autocomplete="off">
                    </div>
                </div><br>


                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Coordenação dinâmica</label>
                        <input type="text" name="dinamica" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Marcha</label>
                        <input type="text" name="marcha" class="form-control" required autocomplete="off">
                    </div>
                </div><br>


                <div class="row">
                    <div class="col col-sm-6">
                        <label for="" id="label">Força muscular</label>
                        <input type="text" name="forcaMuscular" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="">Escala de dor</label>
                        <select name="escalaDor" class="form-control">
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
                        <input type="text" name="tatil" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col-sm-4">
                        <label for="" id="label">Térmica</label>
                        <input type="text" name="termica" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col-sm-4">
                        <label for="" id="label">Dolorosa</label>
                        <input type="text" name="dolorosa" class="form-control" required autocomplete="off">
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
                        <input type="text" name="diagnosticoFisio" class="form-control" required autocomplete="off">
                    </div>
                    <div class="col col-sm-6">
                        <label for="" id="label">Objetivo do tratamento</label>
                        <input type="text" name="objetivos" class="form-control" required autocomplete="off">
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



            </table>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Evolução</label>
            <textarea class="form-control" name="evolucao" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

                    <button class="btn btn-success" name="salvar">Salvar</button>
                    <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a>


                </div>
            </div><br>
        </form>
</body>

</html>