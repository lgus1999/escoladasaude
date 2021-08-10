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
        <title>Ficha traumatológica</title>
        <title></title>
    </head>

    <body>
        <div class="container" style="font-family: 'Product Sans';
    src: url('FONTES/PRODUCT SANS');">


            <h1 style="color: #409ace"><b>Ficha Traumatológica</b></h1>
            <ul class="nav nav-tabs">
                <li class="active"><a style="color: black;" data-toggle="tab" href="#home">Dados do paciente</a></li>
                <li><a style="color:#409ace" data-toggle="tab" href="#menu1">Vista Anterior</a></li>
                <li><a style="color:#409ace" data-toggle="tab" href="#menu2">Vista lateral</a></li>
                <li><a style="color:#409ace" data-toggle="tab" href="#menu3">Vista posterior</a></li>
                <li><a style="color:#409ace" data-toggle="tab" href="#menu4">Diagrama</a></li>
                <li><a style="color:#409ace" data-toggle="tab" href="#menu5">Avaliação</a></li>
                <li><a style="color:#409ace" data-toggle="tab" href="#menu6">Avaliação objetiva</a></li>
                <li><a style="color:#409ace" data-toggle="tab" href="#menu7">Exames</a></li>
                <li><a style="color:#409ace" data-toggle="tab" href="#menu8">Evolução</a></li>


            </ul><br>
         <form action="incluir/ficha_trauma.php" method="post">
            <div class="tab-content">

                <div class="tab-content">
                <input type="text" value="<?php echo $dados['id_paciente']?>" name="iden" style="display: none;"  >
                    <div id="home" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="" id="label">Nome do paciente</label>
                                <input type="text" name="" class="form-control" disabled="true" required value="<?php echo $dados['nome'];?>">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="" id="label">CPF</label>
                                <input type="text" name="" class="form-control" disabled="true" required value="<?php echo $dados['cpf'];?>">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="" id="label">Data de nascimento</label>
                                <input type="date" name="" class="form-control" disabled="true" required value="<?php echo $dados['dt_nasc'];?>">
                            </div>
                        </div><br>
                        <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a><br>
                    </div>










                <!-- ---------------------------------------------------------------------------------- anterior -->

                    <div id="menu1" class="tab-pane fade"><br>

                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="">Cabeça</label>
                                <select name="cabeca" class="form-control">
            <option></option>
            <option value="Alinhada">Alinhada</option>
            <option value="Rodada à direita">Rodada à direita</option>
            <option value="Rodada à esquerda">Rodada à esquerda</option>
            <option value="Inclinada à direita">Inclinada à direita</option>
            <option value="Inclinada à esquerda">Inclinada à esquerda</option>
            </select>
                            </div>
                            <div class="col col-sm-6">
                                <label for="">Altura dos ombros</label>
                                <select name="alturaOmbros" class="form-control">
            <option></option>
            <option value="Nivelados">Nivelados</option>
            <option value="Direito mais elevado">Direito mais elevado</option>
            <option value="Esquerdo mais elevado">Esquerdo mais elevado</option>
            </select>
                            </div>
                        </div><br>




                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="">Clavículas</label>
                                <select name="claviculas" class="form-control">
            <option></option>
            <option value="Simétricas">Simétricas</option>
            <option value="Obliquias para baixo">Obliquias para baixo</option>
            </select>
                            </div>
                            <div class="col col-sm-6">
                                <label for="">Linha alba</label>
                                <select name="linhaAlba" class="form-control">
            <option></option>
            <option value="Retilínea">Retilínea</option>
            <option value="Desvio à direita">Desvio à direita</option>
            <option value="Desvio à esquerda">Desvio à esquerda</option>
            </select>
                            </div>
                        </div><br>



                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="">Teste de Adams</label>
                                <select name="testeAdams" class="form-control">
            <option></option>
            <option value="Sem giba">Sem giba</option>
            <option value="Gibosidade à direita">Gibosidade à direita</option>
            <option value="Gibosidade à esquerda">Gibosidade à esquerda</option>
            </select>
                            </div>
                            <div class="col col-sm-6">
                                <label for="">Altura da mãos</label>
                                <select name="alturaMaos" class="form-control">
            <option></option>
            <option value="Simétricas">Simétricas</option>
            <option value="Direita mais alta">Direita mais alta</option>
            <option value="Esquerda mais alta">Esquerda mais alta</option>
            </select>
                            </div>
                        </div><br>



                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="">Cristas Ilíacas</label>
                                <select name="cristas" class="form-control">
            <option></option>
            <option value="Simétricas">Simétricas</option>
            <option value="Direita mais alta">Direita mais alta</option>
            <option value="Esquerda mais alta">Esquerda mais alta</option>
            </select>
                            </div>
                            <div class="col col-sm-6">
                                <label for="">Espinha ilíaca antero-superior (EIAS)</label>
                                <select name="eias" class="form-control">
            <option></option>
            <option value="Simétricas">Simétricas</option>
            <option value="Direita mais alta">Direita mais alta</option>
            <option value="Esquerda mais alta">Esquerda mais alta</option>
            </select>
                            </div>
                        </div><br>



                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="">Joelhos</label>
                                <select name="joelhos" class="form-control">
            <option></option>
            <option value="Valgo">Valgo</option>
            <option value="Varo">Varo</option>
            <option value="Normal">Normal</option>
            </select>
                            </div>
                            <div class="col col-sm-6">
                                <label for="">Patelas</label>
                                <select name="patelas" class="form-control">
            <option></option>
            <option value="Convergentes">Convergentes</option>
            <option value="Divergentes">Divergentes</option>
            <option value="Normais">Normais</option>
            </select>
                            </div>
                        </div><br>



                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="">Pés</label>
                                <select name="pes" class="form-control">
            <option></option>
            <option value="Planos">Planos</option>
            <option value="Cavos">Cavos</option>
            <option value="Normais">Normais</option>
            </select>
                            </div>
                            <div class="col col-sm-6">
                                <label for="">Hálux</label>
                                <select name="halux" class="form-control">
            <option></option>
            <option value="Hálux valgus">Hálux valgus</option>
            <option value="Alinhado">Alinhado</option>
            </select>
                            </div>
                        </div><br>


                        <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a><br>
                    </div>

 <!-- ---------------------------------------------------------------------------------- leteral -->


                    <div id="menu2" class="tab-pane fade"><br>


                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="">Cabeça</label>
                                <select name="Lcabeca" class="form-control">
            <option></option>
            <option value="Anteriorizada">Anteriorizada</option>
            <option value="Posteriorizada">Posteriorizada</option>
            <option value="Normal">Normal</option>
            </select>
                            </div>
                            <div class="col col-sm-6">
                                <label for="">Cervical</label>
                                <select name="Lcervical" class="form-control">
            <option></option>
            <option value="Hiperlordose">Hiperlordose</option>
            <option value="Retificada">Retificada</option>
            <option value="Normal">Normal</option>
            </select>
                            </div>
                        </div><br>



                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="">Ombro</label>
                                <select name="Lombro" class="form-control">
            <option></option>
            <option value="Protusos">Protusos</option>
            <option value="Anteriorizado">Anteriorizado</option>
            <option value="Posteriorizado">Posteriorizado</option>
            <option value="Normal">Normal</option>
            </select>
                            </div>
                            <div class="col col-sm-6">
                                <label for="">Mãos</label>
                                <select name="Lmaos" class="form-control">
            <option></option>
            <option value="Anterior à coxa">Anterior à coxa</option>
            <option value="Posterior à coxa">Posterior à coxa</option>
            <option value="Alinhadas">Alinhadas</option>
            </select>
                            </div>
                        </div><br>



                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="">Dorso</label>
                                <select name="Ldorso" class="form-control">
            <option></option>
            <option value="Curvo">Curvo</option>
            <option value="Plano">Plano</option>
            <option value="Normal">Normal</option>
            </select>
                            </div>
                            <div class="col col-sm-6">
                                <label for="">Abdômen</label>
                                <select name="Labdomen" class="form-control">
            <option></option>
            <option value="Protuso">Protuso</option>
            <option value="Ptose">Ptose</option>
            <option value="Normal">Normal</option>
            </select>
                            </div>
                        </div><br>



                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="">Lombar</label>
                                <select name="Llombar" class="form-control">
            <option></option>
            <option value="Hiperlordose">Hiperlordose</option>
            <option value="Retificada">Retificada</option>
            <option value="Normal">Normal</option>
            </select>
                            </div>
                            <div class="col col-sm-6">
                                <label for="">Pelve</label>
                                <select name="Lpelve" class="form-control">
            <option></option>
            <option value="Anteversão">Anteversão</option>
            <option value="Retroversão">Retroversão</option>
            <option value="Normal">Normal</option>
            </select>
                            </div>
                        </div><br>



                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="">Tronco</label>
                                <select name="Ltronco" class="form-control">
            <option></option>
            <option value="Antepulsão">Antepulsão</option>
            <option value="Retropulsão">Retropulsão</option>
            <option value="Normal">Normal</option>
            </select>
                            </div>
                            <div class="col col-sm-6">
                                <label for="">Joelhos</label>
                                <select name="Ljoelhos" class="form-control">
            <option></option>
            <option value="Recurvatum">Recurvatum</option>
            <option value="Fletidos">Fletidos</option>
            <option value="Normal">Normal</option>
            </select>
                            </div>
                        </div><br>

                        <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a><br>
                    </div>

 <!-- ---------------------------------------------------------------------------------- posterior -->



                    <div id="menu3" class="tab-pane fade"><br>

                        <div class="row">
                            <div class="col col-sm-4">
                                <label for="">Cabeça</label>
                                <select name="Pcabeca" class="form-control">
            <option></option>
            <option value="Alinhada">Alinhada</option>
            <option value="Rodada à direita">Rodada à direita</option>
            <option value="Rodada à esquerda">Rodada à esquerda</option>
            <option value="Alinhada à direita">Alinhada à direita</option>
            <option value="Alinhada à esquerda">Alinhada à esquerda</option>
            </select>
                            </div>
                            <div class="col col-sm-4">
                                <label for="">Altura dos ombros</label>
                                <select name="PalturaOmbro" class="form-control">
            <option></option>
            <option value="Nivelados">Nivelados</option>
            <option value="Direito mais elevado">Direito mais elevado</option>
            <option value="Esquerdo mais elevado">Esquerdo mais elevado</option>
            </select>
                            </div>
                            <div class="col col-sm-4">
                                <label for="">Escápulas</label>
                                <select name="Pescapulas" class="form-control">
            <option></option>
            <option value="Direita mais alta">Direita mais alta</option>
            <option value="Esquerda mais alta">Esquerda mais alta</option>
            <option value="Rotação superior à direita">Rotação superior à direita</option>
            <option value="Rotação superior à esquerda">Rotação superior à esquerda</option>
            <option value="Rotação inferior à direita">Rotação inferior à direita</option>
            <option value="Rotação inferior à esquerda">Rotação inferior à esquerda</option>
            <option value="Escápulas abduzidas">Escápulas abduzidas</option>
            <option value="Escápulas aduzidas">Escápulas aduzidas</option>
            <option value="Escápula alada à direita">Escápula alada à direita</option>
            <option value="Escapula alada à esquerda">Escapula alada à esquerda</option>
            <option value="Simétricas">Simétricas</option>
            </select>
                            </div>
                        </div><br>


                        <div class="row">
                            <div class="col col-sm-4">
                                <label for="">Teste de Adams</label>
                                <select name="PtesteAdams" class="form-control">
            <option></option>
            <option value="Conexividade à direita">Conexividade à direita</option>
            <option value="Conexicidade à esquerda">Conexicidade à esquerda</option>
            </select>
                            </div>
                            <div class="col col-sm-4">
                                <label for="">Local</label>
                                <select name="Plocal" class="form-control">
            <option></option>
            <option value="Lombar">Lombar</option>
            <option value="Toráxica">Toráxica</option>
            <option value="Cervical">Cervical</option>
            <option value="Em S">Em "S"</option>
            </select>
                            </div>
                            <div class="col col-sm-4">
                                <label for="">EIPIs</label>
                                <select name="Peipis" class="form-control">
            <option></option>
            <option value="Simétricas">Simétricas</option>
            <option value="Direita mais alta">Direita mais alta</option>
            <option value="Esquerda mais alta">Esquerda mais alta</option>
            </select>
                            </div>
                        </div><br>



                        <div class="row">
                            <div class="col col-sm-4">
                                <label for="">Prega glútea</label>
                                <select name="PpregaGlutea" class="form-control">
            <option></option>
            <option value="Simétricas">Simétricas</option>
            <option value="Direita mais alta">Direita mais alta</option>
            <option value="Esquerda mais alta">Esquerda mais alta</option>
            </select>
                            </div>
                            <div class="col col-sm-4">
                                <label for="">Linha Poplítea</label>
                                <select name="PlinhaPoplitea" class="form-control">
            <option></option>
            <option value="Simétricas">Simétricas</option>
            <option value="Direita mais alta">Direita mais alta</option>
            <option value="Esquerda mais alta">Esquerda mais alta</option>
            </select>
                            </div>
                            <div class="col col-sm-4">
                                <label for="">Calcâneo</label>
                                <select name="Peipis2" class="form-control">
            <option></option>
            <option value="Simétricos">Simétricos</option>
            <option value="Valgos">Valgos</option>
            <option value="Valros">Valros</option>
            </select>
                            </div>
                        </div><br>
                        <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a><br>

                    </div>
 <!-- ---------------------------------------------------------------------------------- diagrama -->



                    <div id="menu4" class="tab-pane fade"><br>

                        <div class="row">
                            <div class="col col-sm-12">
                                <label for="" id="label">Diagrama Corporal</label>
                                <input type="text" name="diagramaCorporal" class="form-control" required autocomplete="off">
                            </div>
                        </div><br>



                        <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a>

                    </div>

                     <!-- ---------------------------------------------------------------------------------- avaliação -->

                    <div id="menu5" class="tab-pane fade"><br>


                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="" id="label">Queixa principal</label>
                                <input type="text" name="queixaPrincipal" class="form-control" required autocomplete="off">
                            </div>
                            <div class="col col-sm-6">
                                <label for="" id="label">História da doença atual (HDA)</label>
                                <input type="text" name="hda" class="form-control" required autocomplete="off">
                            </div>
                        </div><br>


                        <div class="row">
                            <div class="col col-sm-6">
                                <label for="" id="label">História da doença pregressa</label>
                                <input type="text" name="doencaPregressa" class="form-control" required autocomplete="off">
                            </div>
                            <div class="col col-sm-6">
                                <label for="" id="label">História de doenças familiares</label>
                                <input type="text" name="doencasFamiliares" class="form-control" required autocomplete="off">
                            </div>
                        </div><br>


                        <div class="row">
                            <div class="col col-sm-12">
                                <label for="" id="label">Outras Patologias</label>
                                <input type="text" name="outrasPatologias" class="form-control" required autocomplete="off">
                            </div>
                        </div><br>

                        <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a>
                    </div>


 <!-- ---------------------------------------------------------------------------------- avaliação Objetiva -->

                    <div id="menu6" class="tab-pane fade"><br>

                        <div class="row">
                            <div class="col col-sm-12">
                                <label for="" id="label">Qualidade da marcha</label>
                                <input type="text" name="qualidadeMarcha" class="form-control" required autocomplete="off">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col col-sm-12">
                                <label for="" id="label">Inspeção geral</label>
                                <input type="text" name="inspecaoGeral" class="form-control" required autocomplete="off">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col col-sm-12">
                                <label for="" id="label">Palpação Superficial e Profunda</label>
                                <input type="text" name="inspecaoSuperficial" class="form-control" required autocomplete="off">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col col-sm-12">
                                <label for="" id="label">Perimetria</label>
                                <input type="text" name="perimetria" class="form-control" required autocomplete="off">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col col-sm-12">
                                <label for="" id="label">Testes especiais</label>
                                <input type="text" name="testesEspeciais" class="form-control" required autocomplete="off">
                            </div>
                        </div><br>

                        <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a>

                    </div>
 <!-- ---------------------------------------------------------------------------------- exames  -->


                    <div id="menu7" class="tab-pane fade"><br>

                        <div class="row">
                            <div class="col col-sm-12">
                                <label for="" id="label">Exames complementares</label>
                                <input type="text" name="examesComplementares" class="form-control" required autocomplete="off">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col col-sm-12">
                                <label for="" id="label">Observações</label>
                                <input type="text" name="observacoes" class="form-control" required autocomplete="off">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col col-sm-12">
                                <label for="" id="label">Objetivos e propostas de tratamento fisioterápico</label>
                                <input type="text" name="propostaTerapeutica" class="form-control" required autocomplete="off">
                            </div>
                        </div>

                        <br>
                        <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a>


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

                    <button class="btn btn-success" type="submit" name="salvar">Salvar</button>
                    <a href="menu.php" class="btn btn-default" >Voltar à tela inicial</a>


                </div>
            </div><br>
        </form>
</body>

</html>