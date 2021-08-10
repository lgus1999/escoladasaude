<!DOCTYPE html>

<html lang="en">

<meta charset="UTF-8">
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<head>
    <title>Triagem</title>
</head>

<body>
    <div class="container" style="font-family: 'Product Sans';
    src: url('FONTES/PRODUCT SANS');">


        <h1 style="color: #409ace"><b>Triagem</b></h1>
        <ul class="nav nav-tabs">
            <li class="active"><a style="color: black;" data-toggle="tab" href="#home">Identificação</a></li>
            <li><a style="color:#409ace" data-toggle="tab" href="#menu1">Sinais vitais / dados antropométricos</a></li>
            <li><a style="color:#409ace" data-toggle="tab" href="#menu2">Fatores de risco e comorbidades</a></li>
            <li><a style="color:#409ace" data-toggle="tab" href="#menu3">Exame Físico</a></li>

        </ul><br>

        <form action="">
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                   
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
                            <input type="date" name="" class="form-control" required value="<?php echo $dados['dataNasc']?>" disabled="true">
                        </div>
                    </div><br>
                    <a href="menu.php" class="btn btn-default">Voltar à tela inicial</a><br>
                </div>

                


                    <!-------------------------------------------------FILIAÇAO-------------------------------------------------------------------------------->

                <div id="menu1" class="tab-pane fade"><br>
                    <div class="form-group">

                        <div class="row">
                             <div class="col col-sm-6">
                             <label for="" id="label">Pressão arterial</label>
                             <input type="text" name="pressaoArterial" class="form-control" id="pressaoArterial" size="13" maxlength="50"  placeholder=" mmHg"/></div>

                             <div class="col col-sm-6">
                             <label for="" id="label">Glicemia</label>
                             <input type="text" name="glicemia" class="form-control" id="glicemia" size="13" maxlength="50"  placeholder=" mg/dl"/>
                         </div></div><br>


                          <div class="row">
                             <div class="col col-sm-6">
                             <label for="" id="label">SPO<sup>2</sup></label>
                             <input type="text" name="SPO" class="form-control" id="spo" size="13" maxlength="50"  placeholder="%"/></div>

                              <div class="col col-sm-6">
                             <label for="" id="label">Pulso</label>
                             <input type="text" name="Pulso" class="form-control" id="pulso" size="13" maxlength="50"  placeholder=" bpm"/></div>
                         </div><br>


                          <div class="row">
                             <div class="col col-sm-6">
                             <label for="" id="label">R</label>
                             <input type="text" name="R" class="form-control" id="r" size="13" maxlength="50"  placeholder="irpm"/></div>

                              <div class="col col-sm-6">
                             <label for="" id="label">Altura</label>
                             <input type="text" name="Altura" class="form-control" id="altura" size="13" maxlength="50"  placeholder=" cm"/></div>
                         </div><br>


                          <div class="row">
                             <div class="col col-sm-6">
                             <label for="" id="label">Peso</label>
                             <input type="text" name="Peso" class="form-control" id="peso" size="13" maxlength="50"  placeholder="Kg"/></div>

                              <div class="col col-sm-6">
                             <label for="" id="label">Circunferência abdominal</label>
                             <input type="text" name="circAbdominal" class="form-control" id="circabdominal" size="13" maxlength="50"  placeholder=" cm"/></div>
                         </div><br>



                          <div class="row">
                             <div class="col col-sm-6">
                             <label for="" id="label">IMC</label>
                             <input type="text" name="IMC" class="form-control" id="imc" size="13" maxlength="50"  value=""/></div>

                              <div class="col col-sm-6">
                             <label for="" id="label">Localização da dor</label>
                             <input type="text" name="localDor" class="form-control" id="localDor" size="13" maxlength="50"  value=""/></div>
                         </div><br>


                            <div class="row">

                            <div class="form-group">
                                <label for="">Observações</label>
                                <textarea class="form-control" name="observacoes1" id="" rows="3"></textarea>
                              </div></div>



                          
                        
                        <br>
                        <a href="menu.html" class="btn btn-default" target="iframes">Voltar a tela inicial</a><br><br>

                         </div></div>
                <!-------------------------------------------------ULTIMO ATENDIMENTO---------------------------------------------------------------------->

                <div id="menu2" class="tab-pane fade"><br>
                    <div class="form-group">
                      
                      <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Portador de hipertensão?</label><br>
                            <input type="radio" id="" name="id3" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id3" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-4">
                            <label for="" id="label">Há quanto tempo?</label>
                            <input type="text" name="tempoHipertensao" class="form-control"></div>
                        </div><br>



                        <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Portador de Diabetes Mellitus?</label><br>
                            <input type="radio" id="" name="id4" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id4" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-4">
                            <label for="" id="label">Há quanto tempo?</label>
                            <input type="text" name="tempoDiabetes" class="form-control"></div>
                        </div><br>


                        <div class="row">
                            <div class="col col-sm-12">
                                <label for="">Parentes com essas doenças?</label>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                  <label class="form-check-label" for="inlineCheckbox1">Nenhum</label> </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                  <label class="form-check-label" for="inlineCheckbox2">Mãe</label>       </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                  <label class="form-check-label" for="inlineCheckbox3">Pai</label> </div>
                                   <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option4">
                                  <label class="form-check-label" for="inlineCheckbox2">Irmã(o)</label> </div>
                                   <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option5">
                                  <label class="form-check-label" for="inlineCheckbox2">Avó</label> </div>
                                   <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option6">
                                  <label class="form-check-label" for="inlineCheckbox2">Avô</label> </div>
                                </div></div>
                                <br>



                        <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Dislipidemia</label><br>
                            <input type="radio" id="" name="id6" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id6" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-4">
                            <label for="" id="label">Há quanto tempo?</label>
                            <input type="text" name="tempoDispilidemia" class="form-control"></div>
                        </div><br>
                    


                     <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Anemia</label><br>
                            <input type="radio" id="" name="id7" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id7" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-4">
                            <label for="" id="label">Há quanto tempo?</label>
                            <input type="text" name="tempoAnemia" class="form-control"></div>
                        </div><br>




                     <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Hipertireodismo</label><br>
                            <input type="radio" id="" name="id8" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id8" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-4">
                            <label for="" id="label">Há quanto tempo?</label>
                            <input type="text" name="tempoHiper" class="form-control"></div>
                        </div><br>



                     <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Hipotireodismo</label><br>
                            <input type="radio" id="" name="id9" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id9" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-4">
                            <label for="" id="label">Há quanto tempo?</label>
                            <input type="text" name="tempoHipo" class="form-control"></div>
                        </div><br>


                        <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Cardiopata</label><br>
                            <input type="radio" id="" name="id10" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id10" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-4">
                            <label for="" id="label">Há quanto tempo?</label>
                            <input type="text" name="tempoCardio" class="form-control"></div>
                        </div><br>


                        <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Depressão</label><br>
                            <input type="radio" id="" name="id11" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id11" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-4">
                            <label for="" id="label">Há quanto tempo?</label>
                            <input type="text" name="tempoDepressao" class="form-control"></div>
                        </div><br>


                        <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Obesidade</label><br>
                            <input type="radio" id="" name="id12" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id12" value="">
                            <label for="nao">Não</label></div>
                        </div><br>



                        <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Sedentarismo</label><br>
                            <input type="radio" id="" name="id13" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id13" value="">
                            <label for="nao">Não</label></div>
                        </div><br>



                        <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Tabagista</label><br>
                            <input type="radio" id="" name="id14" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id14" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-4">
                            <label for="" id="label">Quantos por dia?</label>
                            <input type="text" name="qtdTabaco" class="form-control"></div>
                        </div><br>

                         <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Etilista</label><br>
                            <input type="radio" id="" name="id15" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id15" value="">
                            <label for="nao">Não</label></div>
                        </div><br>


                        <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Toma algum medicamento</label><br>
                            <input type="radio" id="" name="id16" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id16" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-4">
                            <label for="" id="label">Qual(is)?</label>
                            <input type="text" name="medicamento" class="form-control"></div>
                        </div><br>


                        <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Pratica exercício físico</label><br>
                            <input type="radio" id="" name="id17" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id17" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-4">
                            <label for="" id="label">Quantas vezes por semana ?</label>
                            <input type="text" name="exercicio" class="form-control"></div>
                        </div><br>


                        <div class="row">
                        <div class="col col-sm-3">
                         <label for="">Refere problemas de saúde</label><br>
                            <input type="radio" id="" name="id18" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id18" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-4">
                            <label for="" id="label">Qual(is)?</label>
                            <input type="text" name="problemasSaude" class="form-control"></div>
                        </div><br>


                       <div class="row">
                            <div class="col col-sm-12">
                                <label for="">Sintomas</label>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option7">
                                  <label class="form-check-label" for="inlineCheckbox1">Cianose</label>  </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option8">
                                  <label class="form-check-label" for="inlineCheckbox2">Dor</label></div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option9">
                                  <label class="form-check-label" for="inlineCheckbox3">Sudorese</label></div>
                                   <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option10">
                                  <label class="form-check-label" for="inlineCheckbox2">Mal estar / fraqueza</label></div>
                                   <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option11">
                                  <label class="form-check-label" for="inlineCheckbox2">Febre</label></div>
                                   <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option12">
                                  <label class="form-check-label" for="inlineCheckbox2">Dispineia</label></div>
                                   <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option13">
                                  <label class="form-check-label" for="inlineCheckbox2">Náusea / vômito</label></div>
                                   <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option14">
                                  <label class="form-check-label" for="inlineCheckbox2">Palidex cutânea</label></div>

                                </div>
                                </div><br><br>
                            <div class="row">
                            <div class="col col-sm-7">
                            <label for="" id="label">Outros? Qual(is)?</label>
                            <input type="text" name="sintoma" class="form-control"></div></div><br>




                             <div class="row">

                            <div class="form-group">
                                <label for="">Observações</label>
                                <textarea class="form-control" name="observacoes2" id="" rows="3"></textarea>
                              </div></div>
                          
                          
                    <br>
                    <a href="menu.html" class="btn btn-default" target="iframes">Voltar a tela inicial</a><br>
                </div>  
                 </div>

                <!-----------------------------------------DADOS DO DESENVOLVIMENTO-------------------------------------------------------->


                <div id="menu3" class="tab-pane fade">
                    <div class="form-group">


                <h3 style="color: #409ace"><b>Regulação neurológica</b></h3>

                <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Nível de consciência:</label>
                            <input type="radio" id="" name="id20" value="">
                            <label for="lucido">Lúcido(a)</label>
                            <input type="radio" id="" name="id20" value="">
                            <label for="orientado">Orientado(a)</label>
                            <input type="radio" id="" name="id20" value="">
                            <label for="confuso">Confuso(a)</label>
                            <input type="radio" id="" name="id20" value="">
                            <label for="desorientado">Desorientado(a)</label>
                            <input type="radio" id="" name="id20" value="">
                            <label for="inconsciente">Inconsciente</label></div>
                        </div><br>



                <div class="row">
                        <div class="col col-sm-7">
                         <label for="">MMSS:</label>
                            <input type="radio" id="" name="id21" value="">
                            <label for="preservado">Preservado</label>
                            <input type="radio" id="" name="id21" value="">
                            <label for="paresia">Paresia</label>
                            <input type="radio" id="" name="id21" value="">
                            <label for="paralisia">Paralisia</label>
                            <input type="radio" id="" name="id21" value="">
                            <label for="parestesia">Parestesia</label>
                            <input type="radio" id="" name="id21" value="">
                            <label for="movimentos">Movimentos Incoordenados</label></div>
                        </div><br>


                 <div class="row">
                        <div class="col col-sm-7">
                         <label for="">MMII:</label>
                            <input type="radio" id="" name="id22" value="">
                            <label for="preservado">Preservado</label>
                            <input type="radio" id="" name="id22" value="">
                            <label for="paresia">Paresia</label>
                            <input type="radio" id="" name="id22" value="">
                            <label for="paralisia">Paralisia</label>
                            <input type="radio" id="" name="id22" value="">
                            <label for="parestesia">Parestesia</label>
                            <input type="radio" id="" name="id22" value="">
                            <label for="movimentos">Movimentos Incoordenados</label></div>
                        </div><br>


                <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Cefaleia:</label>
                            <input type="radio" id="" name="id23" value="">
                            <label for="sim">Sim</label>
                            <input type="radio" id="" name="id23" value="">
                            <label for="nao">Não</label>
                           </div>
                        </div><br>


                 <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Pupilas:</label>
                            <input type="radio" id="" name="id24" value="">
                            <label for="isocoricas">Isocóricas</label>
                            <input type="radio" id="" name="id24" value="">
                            <label for="anisocoricas">Anisocóricas</label>
                            <input type="radio" id="" name="id24" value="">
                            <label for="miose">Miose</label>
                            <input type="radio" id="" name="id24" value="">
                            <label for="midriase">Midríase</label></div>
                        </div><br>


                <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Fala e linguagem:</label>
                            <input type="radio" id="" name="id25" value="">
                            <label for="comAlteracoes">Com alterações</label>
                            <input type="radio" id="" name="id25" value="">
                            <label for="semAlteracoes">Sem alterações</label>
                           </div>
                        </div><br>


                <h3 style="color: #409ace"><b>Oxigenação</b></h3>

                    <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Respiração:</label>
                            <input type="radio" id="" name="id26" value="">
                            <label for="eupneica">Eupneica</label>
                            <input type="radio" id="" name="id26" value="">
                            <label for="taquipneica">Taquipneica</label>
                            <input type="radio" id="" name="id26" value="">
                            <label for="dispneica">Dispnéica</label>
                            <input type="radio" id="" name="id26" value="">
                            <label for="bradpineia">Bradpinéia</label></div>
                        </div><br>


                    <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Ausculta pulmonar:</label>
                            <input type="radio" id="" name="id27" value="">
                            <label for="mvPresentes">MV presentes</label>
                            <input type="radio" id="" name="id27" value="">
                            <label for="bilateralmente">Bilateralmente</label>
                            <input type="radio" id="" name="id27" value=""></div>
                        </div><br>


                     <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Diminuídos local:</label>
                            <input type="radio" id="" name="id28" value="">
                            <label for="ruidosAdventicios">Ruidos adventícios</label>
                            <input type="radio" id="" name="id28" value="">
                            <label for="roncos">Roncos D/E</label>
                            <input type="radio" id="" name="id28" value="">
                            <label for="sibilos">Sibilos D/E</label>
                            <input type="radio" id="" name="id28" value="">
                            <label for="estertores">Estertores D/E</label></div>
                        </div><br>


                     <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Tosse:</label>
                            <input type="radio" id="" name="id29" value="">
                            <label for="sim">Sim</label>
                            <input type="radio" id="" name="id29" value="">
                            <label for="nao">Não</label>
                            <input type="radio" id="" name="id29" value="">
                            <label for="produtiva">Produtiva</label>
                            <input type="radio" id="" name="id29" value="">
                            <label for="improdutiva">Improdutiva</label></div>
                        </div><br>


                    <div class="row">
                        <div class="col col-sm-5">
                         <label for="">Extremidades:</label>
                            <input type="radio" id="" name="id30" value="">
                            <label for="cianoticas">Cianóticas</label>
                            <input type="radio" id="" name="id30" value="">
                            <label for="perfundida">Perfundida</label>
                            <input type="radio" id="" name="id30" value="">
                            <label for="malPerfundida">Mal perfundida</label><br>
                            <label for="">Tempo de perfusão:</label>
                            <input type="text" name="perfusao" id="30" class="form-control"></div>
                        </div><br>


                    <h3 style="color: #409ace"><b>Regulação vascular</b></h3>



                    <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Frequência cardíaca:</label>
                            <input type="radio" id="" name="id31" value="">
                            <label for="normocardico">Normocardíco</label>
                            <input type="radio" id="" name="id31" value="">
                            <label for="taquicardico">Taquicárdico</label>
                            <input type="radio" id="" name="id31" value="">
                            <label for="bradicardico">Bradicárdico</label></div>
                    </div><br>



                     <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Pulso:</label>
                            <input type="radio" id="" name="id32" value="">
                            <label for="regular">Regular</label>
                            <input type="radio" id="" name="id32" value="">
                            <label for="irregular">Irregular</label>
                            <input type="radio" id="" name="id32" value="">
                            <label for="impalpavel">Impalpável</label>
                            <input type="radio" id="" name="id32" value="">
                            <label for="filiforme">Filiforme</label>
                            <input type="radio" id="" name="id32" value="">
                            <label for="cheio">Cheio</label></div>
                    </div><br>


                    <div class="row">
                        <div class="col col-sm-5">
                         <label for="">Edema:</label>
                            <input type="radio" id="" name="id33" value="">
                            <label for="nao">Não</label>
                            <input type="radio" id="" name="id33" value="">
                            <label for="sim">Sim</label>
                            <label for="local">Local:</label>
                            <input type="text" id="" name="id33" value="" class="form-control"></div>
                    </div><br>



                    <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Pressão arterial:</label>
                            <input type="radio" id="" name="id34" value="">
                            <label for="normotenso">Normotenso</label>
                            <input type="radio" id="" name="id34" value="">
                            <label for="hipotenso">Hipotenso</label>
                            <input type="radio" id="" name="id34" value="">
                            <label for="hipertenso">Hipertenso</label></div>
                    </div><br>


                     <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Rede venosa periférica:</label>
                            <input type="radio" id="" name="id35" value="">
                            <label for="preservada">Preservada</label>
                            <input type="radio" id="" name="id35" value="">
                            <label for="comprometida">Comprometida</label></div>
                    </div><br>
  

                    <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Pele:</label>
                            <input type="radio" id="" name="id36" value="">
                            <label for="corada">Corada</label>
                            <input type="radio" id="" name="id36" value="">
                            <label for="hipocorada">Hipocorada</label></div>
                    </div><br>


                    <div class="row">
                        <div class="col col-sm-5">
                         <label for="">Presença de varizes:</label>
                            <input type="radio" id="" name="id37" value="">
                            <label for="nao">Não</label>
                            <input type="radio" id="" name="id37" value="">
                            <label for="sim">Sim</label><br>
                            <label for="local">Local:</label>
                            <input type="text" id="" name="id37" value="" class="form-control"></div>
                    </div><br>


                    <div class="row">
                        <div class="col col-sm-7">
                         <label for="">Regulação térmica:</label>
                            <input type="radio" id="" name="id38" value="">
                            <label for="normotermico">Normotérmico</label>
                            <input type="radio" id="" name="id38" value="">
                            <label for="hipotermico">Hipotérmico</label>
                            <input type="radio" id="" name="id38" value="">
                            <label for="hipetermico">Hipetérmico</label>
                            <input type="radio" id="" name="id38" value="">
                            <label for="sudorese">Sudorese</label></div>
                    </div><br>



                    <h3 style="color: #409ace"><b>Percepção olfativa, visual, auditiva, tátil, gustativa, dolorosa</b></h3>


                    <div class="row"> 
                       <div class="col col-sm-2">
                         <label for="">Olfato:</label><br>
                            <input type="radio" id="" name="id39" value="">
                            <label for="semAlteracoes">Sem alterações</label><br>
                            <input type="radio" id="" name="id39" value="">
                            <label for="alterado">Alterado</label></div>
                            <div class="col col-sm-3">
                            <label for="local">Qual?</label>
                            <input type="text" id="" name="id39" value="" class="form-control"></div>
                    </div><br>


                    <div class="row"> 
                       <div class="col col-sm-2">
                         <label for="">Acuidade visual:</label><br>
                            <input type="radio" id="" name="id40" value="">
                            <label for="semAlteracoes">Sem alterações</label><br>
                            <input type="radio" id="" name="id40" value="">
                            <label for="alterado">Alterado</label></div>
                            <div class="col col-sm-3">
                            <label for="local">Qual?</label>
                            <input type="text" id="" name="id40" value="" class="form-control"></div>
                    </div><br>


                    <div class="row"> 
                       <div class="col col-sm-2">
                         <label for="">Audição:</label><br>
                            <input type="radio" id="" name="id41" value="">
                            <label for="semAlteracoes">Sem alterações</label><br>
                            <input type="radio" id="" name="id41" value="">
                            <label for="alterado">Alterado</label></div>
                            <div class="col col-sm-3">
                            <label for="local">Qual?</label>
                            <input type="text" id="" name="id41" value="" class="form-control"></div>
                    </div><br>


                    <div class="row"> 
                       <div class="col col-sm-2">
                         <label for="">Tato:</label><br>
                            <input type="radio" id="" name="id42" value="">
                            <label for="semAlteracoes">Sem alterações</label><br>
                            <input type="radio" id="" name="id42" value="">
                            <label for="alterado">Alterado</label></div>
                            <div class="col col-sm-3">
                            <label for="local">Qual?</label>
                            <input type="text" id="" name="id42" value="" class="form-control"></div>
                    </div><br>


                     <div class="row"> 
                       <div class="col col-sm-2">
                         <label for="">Paladar:</label><br>
                            <input type="radio" id="" name="id43" value="">
                            <label for="semAlteracoes">Sem alterações</label><br>
                            <input type="radio" id="" name="id43" value="">
                            <label for="alterado">Alterado</label></div>
                            <div class="col col-sm-3">
                            <label for="local">Qual?</label>
                            <input type="text" id="" name="id43" value="" class="form-control"></div>
                    </div><br>


                     <div class="row">
                        <div class="col col-sm-2">
                         <label for="">Dor aguda:</label><br>
                            <input type="radio" id="" name="id44" value="">
                            <label for="semDor">Sem dor</label><br>
                            <input type="radio" id="" name="id44" value="">
                            <label for="forLeve">Dor leve</label><br>
                            <input type="radio" id="" name="id44" value="">
                            <label for="dorModerada">Dor moderada</label><br>
                            <input type="radio" id="" name="id44" value="">
                            <label for="dorIntensa">Dor intensa</label></div>
                            <div class="col col-sm-3">
                            <label for="local">Local:</label>
                            <input type="text" id="" name="id44" value="" class="form-control"></div>
                    </div><br>


                    <h3 style="color: #409ace"><b>Nutrição</b></h3>

                    <div class="row"> 
                       <div class="col col-sm-7">
                         <label for="">Alimentação e apetite:</label>
                            <input type="radio" id="" name="id45" value="">
                            <label for="dieta">Dieta zero</label>
                            <input type="radio" id="" name="id45" value="">
                            <label for="normal">Normal</label>
                            <input type="radio" id="" name="id45" value="">
                            <label for="normal">Aumentado</label>
                            <input type="radio" id="" name="id45" value="">
                            <label for="diminuido">Diminuído</label></div>
                    </div><br>


                    <div class="row"> 
                       <div class="col col-sm-5">
                         <label for="">Abdome:</label>
                            <input type="radio" id="" name="id46" value="">
                            <label for="plano">Plano</label>
                            <input type="radio" id="" name="id46" value="">
                            <label for="globoso">Globoso</label>
                            <input type="radio" id="" name="id46" value="">
                            <label for="distendido">Distendido</label>
                            <input type="radio" id="" name="id46" value="">
                            <label for="dolorosoPalp">Doloroso a palpação</label><br>
                            <label for="outros">Outros</label>
                            <input type="text" class="form-control id="" name="id46" value=""></div>
                    </div><br>





                    <h3 style="color: #409ace"><b>Hidratação/ hidratação hidrossalina e eletrolítica</b></h3>


                    <div class="row"> 
                       <div class="col col-sm-7">
                         <label for="">Turgidez da pele:</label>
                            <input type="radio" id="" name="id47" value="">
                            <label for="preservada">Preservada</label>
                            <input type="radio" id="" name="id47" value="">
                            <label for="diminuida">Diminuída</label></div>
                    </div><br>

                    <div class="row"> 
                       <div class="col col-sm-7">
                         <label for="">Hidratação:</label>
                            <input type="radio" id="" name="id48" value="">
                            <label for="hidratada">Hidratada</label>
                            <input type="radio" id="" name="id48" value="">
                            <label for="desidratada">Desidratada</label></div>
                    </div><br>

                    <div class="row"> 
                       <div class="col col-sm-7">
                         <label for="">Fraqueza muscular:</label>
                            <input type="radio" id="" name="id49" value="">
                            <label for="sim">Sim</label>
                            <input type="radio" id="" name="id49" value="">
                            <label for="nao">Não</label></div>
                    </div><br>

                     <div class="row"> 
                       <div class="col col-sm-5">
                         <label for="">Câimbras:</label>
                            <input type="radio" id="" name="id50" value="">
                            <label for="sim">Sim</label>
                            <input type="radio" id="" name="id50" value="">
                            <label for="nao">Não</label><br>
                            <label for="local">Local</label>
                            <input type="text" class="form-control" id="" name="id50" value=""></div><br>
                    </div><br>


                      <div class="row"> 
                       <div class="col col-sm-7">
                         <label for="">Hidratação das mucosas:</label>
                            <input type="radio" id="" name="id51" value="">
                            <label for="preservada">Preservada</label>
                            <input type="radio" id="" name="id51" value="">
                            <label for="diminuida">Diminuída</label></div>
                    </div><br>


                    <h3 style="color: #409ace"><b>Eliminação Intestinal e vesical</b></h3>

                    
                    <div class="row">
                        <div class="col col-sm-2">
                         <label for="">Náusea</label><br>
                            <input type="radio" id="" name="id52" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id52" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-3">
                            <label for="" id="label">Frequência:</label>
                            <input type="text" name="frequencia" class="form-control"></div>
                        </div><br>


                     <div class="row">
                        <div class="col col-sm-2">
                         <label for="">Êmese</label><br>
                            <input type="radio" id="" name="id53" value="">
                            <label for="sim">Sim</label><br>
                            <input type="radio" id="" name="id53" value="">
                            <label for="nao">Não</label></div>
                            <div class="col col-sm-3">
                            <label for="" id="label">Frequência:</label>
                            <input type="text" name="frequencia" class="form-control"></div>
                        </div><br>


                    <div class="row">
                    <div class="col col-sm-2">
                     <label for="">Eliminações intestinais</label><br>
                        <input type="radio" id="" name="id54" value="">
                        <label for="normal">Normal</label><br>
                        <input type="radio" id="" name="id54" value="">
                        <label for="constipacao">Constipação</label><br>
                        <input type="radio" id="" name="id54" value="">
                        <label for="diarreia">Diarréia</label></div>
                        <div class="col col-sm-3">
                        <label for="" id="label">Frequência:</label>
                        <input type="text" name="frequencia"  class="form-control" size="13" maxlength="50"  value=" vezes/semana"></div>
                    </div><br>



                    <div class="row">
                    <div class="col col-sm-7">
                     <label for="">Eliminações urinárias:</label>
                        <input type="radio" id="" name="id55" value="">
                        <label for="espontanea">Espontânea</label>
                        <input type="radio" id="" name="id55" value="">
                        <label for="retencao">Retenção</label>
                        <input type="radio" id="" name="id55" value="">
                        <label for="incontinencia">Incontinência</label>
                        <input type="radio" id="" name="id55" value="">
                        <label for="disuria">Disúria</label>
                        <input type="radio" id="" name="id55" value="">
                        <label for="poliuria">Poliúria</label></div>
                    </div><br>



                     <div class="row">
                    <div class="col col-sm-7">
                     <label for="">Aspecto da urina:</label>
                        <input type="radio" id="" name="id56" value="">
                        <label for="claro">Claro</label>
                        <input type="radio" id="" name="id56" value="">
                        <label for="ambar">Âmbar</label>
                        <input type="radio" id="" name="id56" value="">
                        <label for="hematuria">Hematúria</label></div>
                    </div><br>




                    <h3 style="color: #409ace"><b>Integridade Cutânea - Mucosa</b></h3>

                    <div class="row">
                    <div class="col col-sm-8">
                    <label for="">Pele:</label>
                        <input type="radio" id="" name="id57" value="">
                        <label for="claro">Íntegra</label>
                        <input type="radio" id="" name="id57" value="">
                        <label for="prurido">Prurido</label>
                        <input type="radio" id="" name="id57" value="">
                        <label for="petequias">Petéquias</label>
                        <input type="radio" id="" name="id57" value="">
                        <label for="equimose">Equimose</label>
                        <input type="radio" id="" name="id57" value="">
                        <label for="hematomas">Hematomas</label>
                        <input type="radio" id="" name="id57" value="">
                        <label for="escoriacoes">Escoriações</label>
                        <input type="radio" id="" name="id57" value="">
                        <label for="lesoes">Lesões</label>
                        <input type="radio" id="" name="id57" value="">
                        <label for="ictericia">Icterícia</label></div>
                        <div class="col col-sm-5">
                        <label for="">Local</label>
                        <input type="text" name="local"  class="form-control"></div>
                    </div><br>



                    <div class="row">
                    <div class="col col-sm-7">
                    <label for="">Olhos:</label>
                        <input type="radio" id="" name="id58" value="">
                        <label for="ictericia">Icterícia</label>
                        <input type="radio" id="" name="id58" value="">
                        <label for="edema">Edema conjuntiva</label></div>
                    </div><br>


                    <div class="row">
                    <div class="col col-sm-2">
                    <label for="">Cicatriz:</label><br>
                        <input type="radio" id="" name="id59" value="">
                        <label for="sim">Sim</label><br>
                        <input type="radio" id="" name="id59" value="">
                        <label for="nao">Não</label></div>
                    <div class="col col-sm-3">
                        <label for="">Local</label>
                        <input type="text" class="form-control" name="local"></div>
                    <div class="col col-sm-3">
                        <label for="">Alterações</label>
                        <input type="text" class="form-control" name="alteracoes"></div>

                    </div><br>



                    <div class="row">
                    <div class="col col-sm-2">
                    <label for="">Ferida operatória:</label><br>
                        <input type="radio" id="" name="id60" value="">
                        <label for="sim">Sim</label><br>
                        <input type="radio" id="" name="id60" value="">
                        <label for="nao">Não</label></div>
                    <div class="col col-sm-3">
                        <label for="">Aspecto</label>
                        <input type="text" class="form-control" name="local"></div>
                 
                    </div><br>



                    <div class="row">
                    <div class="col col-sm-2">
                    <label for="">Curativo:</label><br>
                        <input type="radio" id="" name="id61" value="">
                        <label for="sim">Sim</label><br>
                        <input type="radio" id="" name="id61" value="">
                        <label for="nao">Não</label></div>
                    <div class="col col-sm-3">
                        <label for="">Local</label>
                        <input type="text" class="form-control" name="local"></div>
                    <div class="col col-sm-3">
                        <label for="">Aspecto</label>
                        <input type="text" class="form-control" name="aspecto"></div>

                    </div><br>
                    


                    <h3 style="color: #409ace"><b>Regulaçao imunológica</b></h3>

                    <div class="row">
                    <div class="col col-sm-2">
                    <label for="">Alergias:</label><br>
                        <input type="radio" id="" name="id62" value="">
                        <label for="sim">Sim</label><br>
                        <input type="radio" id="" name="id62" value="">
                        <label for="nao">Não</label></div>
                    <div class="col col-sm-3">
                        <label for="">Qual?</label>
                        <input type="text" class="form-control" name="qual"></div>
                    </div><br>


                    <div class="row">
                    <div class="col col-sm-2">
                    <label for="">Doenças do sistema imunológico:</label><br>
                        <input type="radio" id="" name="id63" value="">
                        <label for="sim">Sim</label><br>
                        <input type="radio" id="" name="id63" value="">
                        <label for="nao">Não</label></div>
                    <div class="col col-sm-3">
                        <label for="">Qual?</label>
                        <input type="text" class="form-control" name="qual"></div>
                    </div><br>




                    <div class="row">
                    <div class="col col-sm-2">
                    <label for="">Calendário vacinal:</label><br>
                        <input type="radio" id="" name="id64" value="">
                        <label for="completo">Completo</label><br>
                        <input type="radio" id="" name="id64" value="">
                        <label for="naoTrouxe">Não trouxe</label><br>
                        <input type="radio" id="" name="id64" value="">
                        <label for="naoTem">Não tem</label><br>
                        <input type="radio" id="" name="id64" value="">
                        <label for="incompleta">Incompleto</label></div>
                    <div class="col col-sm-3">
                        <label for="">Qual?</label>
                        <input type="text" class="form-control" name="qual"></div>
                    </div><br>


                     <div class="form-group">
                                <label for="">Observações</label>
                                <textarea class="form-control" name="observacoes3" id="" rows="3"></textarea>
                              </div></div>


                       <br>
                   <div class="row">
                    <button class="btn btn-success">Salvar</button>
                    <a href="menu.html" class="btn btn-default" target="iframes">Voltar a tela inicial</a><br></div><br>




                </div></div>



            </div>
        </form>
</body>

</html>