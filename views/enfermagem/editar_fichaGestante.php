<!DOCTYPE html>
<html>
<?php
require_once("pdo.php");
  session_start();
  
        $paciente = $_SESSION['id_paciente'];
  
      $sql = "SELECT * FROM tb_paciente WHERE id_paciente = :id";
      $stmt = $cbd->prepare($sql);
      $stmt->execute(array(":id" => $paciente ));
      $dados = $stmt->fetch(PDO::FETCH_ASSOC);

  ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    

    <title>Ficha da gestante</title>
    <title></title>
</head>

<body>
    <div class="container" style="font-family: 'Product Sans';
    src: url('FONTES/PRODUCT SANS');">


        <h1 style="color:  #409ace"><b>Ficha de Gestantes</b></h1>
        <ul class="nav nav-tabs" style="font-size: 13px;">
            <li class="active"><a style="color: black;" data-toggle="tab" href="#home">Dados do paciente</a></li>
            <li><a style="color: #409ace" data-toggle="tab" href="#menu1">Antecedentes obstétricos</a></li>
            <li><a style="color: #409ace" data-toggle="tab" href="#menu2">Antecedentes clínicos</a></li>
            <li><a style="color: #409ace" data-toggle="tab" href="#menu3">Gestação atual</a></li>
            <li><a style="color: #409ace" data-toggle="tab" href="#menu4">Situação da vacina</a></li>
            <li><a style="color: #409ace" data-toggle="tab" href="#menu5">Ultra-sonografia</a></li>
            <li><a style="color: #409ace" data-toggle="tab" href="#menu6">Exames </a></li>
            
            <li><a style="color: #409ace" data-toggle="tab" href="#menu8">Evolução</a></li>

        </ul><br>

        <form action="editar/editar_gestante.php" method="POST">
            <div class="tab-content">

                <div id="home" class="tab-pane fade in active">
                      
                            <input type="text" id="iden" name="id_paciente" class="form-control" required value="<?php echo $dados['id_paciente']?> " style="display: none;">
                     
                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Nome do paciente</label>
                            <input type="text" name="" class="form-control" required value="<?php echo $dados['nome']?> " disabled>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">CPF</label>
                            <input type="text" name="" class="form-control" required value="<?php echo $dados['cpf']?>" disabled>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Data de nascimento</label>
                            <input type="date" name="" class="form-control" required value="<?php echo $dados['dt_nasc']?>" disabled>
                        </div>
                    </div><br>
                    <a href="menu.php" class="btn btn-default">Voltar à tela inicial</a><br>
                </div>


                <!--------------------------------------------ANTECEDENTES OBSTÉTRICOS-------------------------------------------------------------------------------->

                <script>
                 $(document).ready(function(e){
                    var livro = $("#iden").val();
                    $.getJSON('consultas/consulta_gestante.php?valor='+livro,function (dados){
                        var result = dados[0];
                        console.log(result);
                           
                    $("#gravidez").val(result['qtd_gravidez']);      
                    $("#partos").val(result['qtd_parto']);  
                    $("#abortos").val(result['qtd_aborto']);  
                    $("#natimortos").val(result['natimorto']);  
                    $("#dum").val(result['dum']);  
                    $("#dpp").val(result['dpp']);  
                    $("#amamentar").val(result['amamentacao']);   
                    $("#peso").val(result['peso']);
                    
                    $("#ant-diabete").val(result['ant_diabete']);    
                    $("#ant-hiper").val(result['ant_hipertensao']);    
                    $("#ant-eclanp").val(result['ant_eclampsia']);  
                    $("#ant-trombo").val(result['ant_trombo']);
                    $("#ant-mental").val(result['ant_doe_mental']);
                    $("#ant-cardio").val(result['ant_cardiopatia']);

                    $("#prematuro").val(result['prematuro']);  
                    $("#rh").val(result['isoimunizacao']);  
                    $("#inf_uri").val(result['inf_urinaria']);                                                    
                    $("#olig").val(result['oligo']);  
                    $("#cardio").val(result['cardiopatia']);  
                    $("#tabag").val(result['tabagismo']);  
                    $("#dg").val(result['diab_gest']);  
                    $("#eclamp").val(result['eclampsia']);  
                    $("#hiper").val(result['hipertensao']);  
                    $("#datis").val(result['datismo']);  
                    $("#hemo").val(result['hemorragia']);  
                    $("#ciur").val(result['ciur']);  

                    $("#vacina").val(result['st_vaciana']);  
                    $("#influ").val(result['influenza']);  
                    $("#1dose").val(result['dose1']);  
                    $("#2dose").val(result['dose2']);  
                    $("#3dose").val(result['dose3']);  
                    });

                 });
            
            
                </script>



                <div id="menu1" class="tab-pane fade"><br>

                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Quantidade de gravidezes:</label>
                            <input type="int" name="qtdGravidez" id="gravidez" class="form-control" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Quantidade de partos:</label>
                            <input type="int" name="qtdPartos" class="form-control" id="partos" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Quantidade de abortos:</label>
                            <input type="int" name="qtdAbortos" class="form-control" id="abortos" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Natimortos:</label>
                            <input type="int" name="natimortos" class="form-control" id="natimortos" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">DUM:</label>
                            <input type="int" name="dum" class="form-control" id="dum" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">DPP:</label>
                            <input type="int" name="dpp" class="form-control" id="dpp" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Amamentação materna:</label>
                            <input type="text" name="amamentacao" class="form-control" id="amamentar" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Peso prévio:</label>
                            <input type="text" name="pesoPrevio" class="form-control" id="peso" required autocomplete="off"></div>
                    </div><br>

                    <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a><br>
                </div>

                <!-------------------------------------------------ANTECEDENTES CLÍNICOS-------------------------------------------------------------------------------->


                <div id="menu2" class="tab-pane fade"><br>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Diabetes:</label>
                            <select name="ant-diabetes" id="ant-diabete" class="form-control">
                        <option></option>
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                        </select></div>
                                    <div class="col col-sm-6">
                                        <label for="">Hipertensão:</label>
                                        <select name="ant-hipertensao" id="ant-hiper" class="form-control">
                        <option></option>
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                        </select></div>
                                </div>


                                <div class="row">
                                    <div class="col col-sm-6">
                                        <label for="">Pré-Eclâmpsia:</label>
                                        <select name="ant-eclampsia" id="ant-eclanp" class="form-control">
                        <option></option>
                        <option value="Nao">Não</option>
                        <option value="Sim">Sim</option>
                        </select></div>
                                    <div class="col col-sm-6">
                                        <label for="">Tromboembolismo:</label>
                                        <select name="ant-tromboembolismo" id="ant-trombo" class="form-control">
                        <option></option>
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                        </select></div>
                                </div>



                                <div class="row">
                                    <div class="col col-sm-6">
                                        <label for="">Doença mental:</label>
                                        <select name="ant-doencaMental" id="ant-mental" class="form-control">
                        <option></option>
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                        </select></div>
                                    <div class="col col-sm-6">
                                        <label for="">Cardiopatia:</label>
                                        <select name="ant-cardiopatia" id="ant-cardio" class="form-control">
                        <option></option>
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                        </select></div>
                                </div><br>


                    <a href="menu.php" class="btn btn-default">Voltar à tela inicial</a><br>
                </div>


                <!-------------------------------------------------GESTAÇÃO ATUAL-------------------------------------------------------------------------------->


                <div id="menu3" class="tab-pane fade"><br>


                                    <div class="row">
                                        <div class="col col-sm-6">
                                            <label for="">Trabalho de parto prematuro:</label>
                                            <select name="partoPrematuro" id="prematuro" class="form-control">
                            <option></option>
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
                            </select></div>
                                        <div class="col col-sm-6">
                                            <label for="">Isoimunização RH:</label>
                                            <select name="isoimunizacao" id="rh" class="form-control">
                            <option></option>
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
                            </select></div>
                                    </div>


                                    <div class="row">
                                        <div class="col col-sm-6">
                                            <label for="">Infecção urinária:</label>
                                            <select name="infeccaoUrinaria" id="inf_uri" class="form-control">
                            <option></option>
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
                            </select></div>
                                        <div class="col col-sm-6">
                                            <label for="">Oligopolidrâmnio:</label>
                                            <select name="oligo" id="olig" class="form-control">
                            <option></option>
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
                            </select></div>
                                    </div>


                                    <div class="row">
                                        <div class="col col-sm-6">
                                            <label for="">Cardiopatia:</label>
                                            <select name="cardiopatia" id="cardio" class="form-control">
                            <option></option>
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
                            </select></div>
                                        <div class="col col-sm-6">
                                            <label for="">Tabagismo:</label>
                                            <select name="tabagismo" id="tabag" class="form-control">
                            <option></option>
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
                            </select></div>
                                    </div>


                                    <div class="row">
                                        <div class="col col-sm-6">
                                            <label for="">Diabetes Gestacional:</label>
                                            <select name="diabetesGestacional" id="dg" class="form-control">
                            <option></option>
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
                            </select></div>
                                        <div class="col col-sm-6">
                                            <label for="">Pré-Eclâmpsia:</label>
                                            <select name="eclampsia" id="eclamp" class="form-control">
                            <option></option>
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
                            </select></div>
                                    </div>


                                    <div class="row">
                                        <div class="col col-sm-6">
                                            <label for="">Hipertensão:</label>
                                            <select name="hipertensao" id="hiper" class="form-control">
                            <option></option>
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
                            </select></div>
                                        <div class="col col-sm-6">
                                            <label for="">Pós-Datismo:</label>
                                            <select name="datismo" id="datis" class="form-control">
                            <option></option>
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
                            </select></div>
                                    </div>


                                    <div class="row">
                                        <div class="col col-sm-6">
                                            <label for="">Hemorragia 1ºT:</label>
                                            <select name="hemorragia" id="hemo" class="form-control">
                            <option></option>
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
                            </select></div>
                                        <div class="col col-sm-6">
                                            <label for="">CIUR:</label>
                                            <select name="ciur" id="ciur" class="form-control">
                            <option></option>
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
                            </select></div>
                                    </div><br>
                                    <a href="menu.php" class="btn btn-default">Voltar à tela inicial</a><br>

                </div>
                <!-------------------------------------------------SITUAÇÃO DA VACINA-------------------------------------------------------------------------------->

                <div id="menu4" class="tab-pane fade"><br>

                            <div class="row">
                                <div class="col col-sm-6">
                                    <label for="">Situação da vacina:</label>
                                    <select name="vacina" id="vacina" class="form-control">
                    <option></option>
                    <option value="Não vacinada">Não vacinada</option>
                    <option value="Imunizada a menos de 5 anos">Imunizada a menos de 5 anos</option>
                    <option value="Imunizada a mais de 5 anos">Imunizada a mais de 5 anos</option>
                    <option value="Vacinação incompleta">Vacinação incompleta</option>
                    </select></div>
                                <div class="col col-sm-6">
                                    <label for="">Influenza?</label>
                                    <select name="influenza" id="influ" class="form-control">
                    <option></option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                    </select></div>
                            </div>

                            <div class="row">
                                <div class="col col-sm-6">
                                    <h3>Informa</h3>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-sm-4">
                                    <label for="" id="label">1ª dose:</label>
                                    <input type="date" name="dose1" id="1dose" class="form-control" required autocomplete="off"></div>

                                <div class="col col-sm-4">
                                    <label for="" id="label">2ª dose:</label>
                                    <input type="date" name="dose2" id="2dose" class="form-control" required autocomplete="off"></div>

                                <div class="col col-sm-4">
                                    <label for="" id="label">3ª dose:</label>
                                    <input type="date" name="dose3" id="3dose" class="form-control" required autocomplete="off"></div>
                            </div><br>

                    <a href="menu.php" class="btn btn-default">Voltar à tela inicial</a>
                </div>
                <br>




                <!--tabela 1--------------------------------------------------------------------------------------------------------------------------------------->

                <div id="menu5" class="tab-pane fade"><br>


                    <table class="table table-bordered tabelaEditavel">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">IG DUM</th>
                                <th scope="col">IG USG</th>
                                <th scope="col">Peso fetal</th>
                                <th scope="col">Placenta</th>
                                <th scope="col">Líquido</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>

                    <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a><br>

                </div>


                <!--tabela 2--------------------------------------------------------------------------------------------------------------------------------------->


                <div id="menu6" class="tab-pane fade"><br>
                 <h3>1ª parte</h3>
                    <table class="table table-bordered tabelaEditavel">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Exames</th>
                                <th scope="col">Data</th>
                                <th scope="col">Resultado</th>
                                <th scope="col">Data</th>
                                <th scope="col">Resultado</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">ABO/RH</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">HB/HT</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">Glicemia</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">VDRL</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">Anti-HIV</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">HbSAg</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">Toxoplasmose IgM</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">Toxoplasmose IGG</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">S Urina</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">Urocultura</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">Outros</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>


                        </tbody>



                    </table>

                    <fieldset></fieldset>

                  <h3>2ª parte</h3>
                    <table class="table table-bordered ">

                        <tbody>
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="row">Data</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>


                                <tr>
                                    <th scope="row">IG</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th scope="row">Pes</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th scope="row">PA</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th scope="row">AFU</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th scope="row">AP fetal</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th scope="row">BCF</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th scope="row">MF</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th scope="row">Edema</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </thead>
                        </tbody>
                        <script type="text/javascript">
                            $(function() {
                                $("td").dblclick(function() {
                                    var conteudoOriginal = $(this).text();

                                    $(this).addClass("celulaEmEdicao");
                                    $(this).html("<input type='text' value='" + conteudoOriginal + "' />");
                                    $(this).children().first().focus();

                                    $(this).children().first().keypress(function(e) {
                                        if (e.which == 13) {
                                            var novoConteudo = $(this).val();
                                            $(this).parent().text(novoConteudo);
                                            $(this).parent().removeClass("celulaEmEdicao");
                                        }
                                    });

                                    $(this).children().first().blur(function() {
                                        $(this).parent().text(conteudoOriginal);
                                        $(this).parent().removeClass("celulaEmEdicao");
                                    });
                                });
                            });
                        </script>
                    </table>
                    <a href="menu.php" class="btn btn-default">Voltar à tela inicial</a><br>
                </div>


             

                <!-- Evolução ---------------------------------------------------------------------------------------------------------------- -->
                <div id="menu8" class="tab-pane fade"><br>

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
                        $stmt->execute(array(":id" => $paciente, ":curso" =>'Gestante' ));
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

                                <button class="btn btn-success" name="editar">Editar</button>
                            
                                <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a>
                                <a href="../../pdf/ficha_gestante.php?id=<?php echo $paciente?>" target="iframe" class="btn btn-default" >Imprimir prontuário</a>


                </div>
            </div><br>
        </form>
</body>

</html>