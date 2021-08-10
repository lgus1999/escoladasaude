<!DOCTYPE html>
<html>
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
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="script.js"></script>

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
            <li><a style="color: #409ace" data-toggle="tab" href="#menu6">Exames</a></li>
            <li><a style="color: #409ace" data-toggle="tab" href="#menu8">Evolução</a></li>

        </ul><br>

        <form action="incluir/incluir_gestante.php" method="POST">
            <div class="tab-content">

                <div id="home" class="tab-pane fade in active">
                     
                            <input type="text" name="id_paciente" class="form-control" required value="<?php echo $dados['id_paciente']?>" style="display: none;" >
                    
                    <br>
                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Nome do paciente</label>
                            <input type="text" name="" class="form-control" required value="<?php echo $dados['nome']?> " disabled="true">
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


                <!--------------------------------------------ANTECEDENTES OBSTÉTRICOS-------------------------------------------------------------------------------->

                <div id="menu1" class="tab-pane fade"><br>
                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Quantidade de gravidezes:</label>
                            <input type="int" name="qtdGravidez" class="form-control" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Quantidade de partos:</label>
                            <input type="int" name="qtdPartos" class="form-control" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Quantidade de abortos:</label>
                            <input type="int" name="qtdAbortos" class="form-control" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Natimortos:</label>
                            <input type="int" name="natimortos" class="form-control" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">DUM:</label>
                            <input type="int" name="dum" class="form-control" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">DPP:</label>
                            <input type="int" name="dpp" class="form-control" required autocomplete="off"></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="" id="label">Amamentação materna:</label>
                            <input type="text" name="amamentacao" class="form-control" required autocomplete="off"></div>
                        <div class="col col-sm-6">
                            <label for="" id="label">Peso prévio:</label>
                            <input type="text" name="pesoPrevio" class="form-control" required autocomplete="off"></div>
                    </div><br>

                    <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a><br>
                </div>

                <!-------------------------------------------------ANTECEDENTES CLÍNICOS-------------------------------------------------------------------------------->


                <div id="menu2" class="tab-pane fade"><br>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Diabetes:</label>
                            <select name="ant_diabetes" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                        <div class="col col-sm-6">
                            <label for="">Hipertensão:</label>
                            <select name="ant_hipertensao" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                    </div>


                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Pré-Eclâmpsia:</label>
                            <select name="ant_eclampsia" class="form-control">
            <option></option>
            <option value="Nao">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                        <div class="col col-sm-6">
                            <label for="">Tromboembolismo:</label>
                            <select name="ant_tromboembolismo" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                    </div>



                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Doença mental:</label>
                            <select name="ant_doencaMental" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                        <div class="col col-sm-6">
                            <label for="">Cardiopatia:</label>
                            <select name="ant_cardiopatia" class="form-control">
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
                            <select name="partoPrematuro" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                        <div class="col col-sm-6">
                            <label for="">Isoimunização RH:</label>
                            <select name="isoimunizacao" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                    </div>


                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Infecção urinária:</label>
                            <select name="infeccaoUrinaria" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                        <div class="col col-sm-6">
                            <label for="">Oligopolidrâmnio:</label>
                            <select name="oligo" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                    </div>


                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Cardiopatia:</label>
                            <select name="cardiopatia" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                        <div class="col col-sm-6">
                            <label for="">Tabagismo:</label>
                            <select name="tabagismo" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                    </div>


                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Diabetes Gestacional:</label>
                            <select name="diabetesGestacional" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                        <div class="col col-sm-6">
                            <label for="">Pré-Eclâmpsia:</label>
                            <select name="eclampsia" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                    </div>


                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Hipertensão:</label>
                            <select name="hipertensao" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                        <div class="col col-sm-6">
                            <label for="">Pós-Datismo:</label>
                            <select name="datismo" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                    </div>


                    <div class="row">
                        <div class="col col-sm-6">
                            <label for="">Hemorragia 1ºT:</label>
                            <select name="hemorragia" class="form-control">
            <option></option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
            </select></div>
                        <div class="col col-sm-6">
                            <label for="">CIUR:</label>
                            <select name="ciur" class="form-control">
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
                            <select name="vacina" class="form-control">
            <option></option>
            <option value="Não vacinada">Não vacinada</option>
            <option value="Imunizada a menos de 5 anos">Imunizada a menos de 5 anos</option>
            <option value="Imunizada a mais de 5 anos">Imunizada a mais de 5 anos</option>
            <option value="Vacinação incompleta">Vacinação incompleta</option>
            </select></div>
                        <div class="col col-sm-6">
                            <label for="">Influenza?</label>
                            <select name="influenza" class="form-control">
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
                            <input type="date" name="dose1" class="form-control" required autocomplete="off"></div>

                        <div class="col col-sm-4">
                            <label for="" id="label">2ª dose:</label>
                            <input type="date" name="dose2" class="form-control" required autocomplete="off"></div>

                        <div class="col col-sm-4">
                            <label for="" id="label">3ª dose:</label>
                            <input type="date" name="dose3" class="form-control" required autocomplete="off"></div>
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
                <h3>2ª parte</h3>
                    <table class="table table-bordered tabelaEditavel">

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


              

            <div id="menu8" class="tab-pane fade"><br>

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