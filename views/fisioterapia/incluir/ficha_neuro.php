<?php

 if(isset($_POST['salvar'])){
    include_once('../pdo.php');
    session_start();

    $query = "INSERT INTO tb_neurologica(queixa,hmp,pas,fc,fr,compelmentares,antecedentes,patologia,mendicamento,motricidade_vol,inspecao,palpacao,reflexo,tonus,trofismo,motricidade,
    mmii,mmss,cordenacao,marcha,forca,dor,tatil,termica,dolorosa,diagnostico_fisio,objetivo,id_paciente,id_usuario,diagnostico_cl)VALUE(:queixa,:hmp,:pas,:fc,:fr,:compelmentares,
    :antecedentes,:patologia,:mendicamento,:motricidade_vol,:inspecao,:palpacao,:reflexo,:tonus,:trofismo,:motricidade,:mmii,:mmss,:cordencao,:marcha,:forca,:dor,:tatil,:termica,
    :dolorosa,:diagnostico_fisio,:objetivo,:id_paciente,:id_usuario,:diagnostico_cl)";

    $stmt = $cbd->prepare($query);
    $stmt->execute(array(
        ":queixa"=>$_POST['queixaPrincipal'],
        ":hmp"=>$_POST['hmp'],
        
        ":pas"=>$_POST['pas'],
        ":fc"=>$_POST['fc'],
        ":fr"=>$_POST['fr'],
        ":compelmentares"=>$_POST['examesComplementares'],
        ":antecedentes"=>$_POST['antecedentesCirurgicos'],
        ":patologia"=>$_POST['patologiaAssociada'],
        ":mendicamento"=>$_POST['medicamentos'],

        ":motricidade_vol"=>$_POST['motricidadeVoluntaria'],
        ":inspecao"=>$_POST['inspecao'],
        ":palpacao"=>$_POST['palpacao'],
        ":reflexo"=>$_POST['reflexo'],
        ":tonus"=>$_POST['tonusMuscular'],
        ":trofismo"=>$_POST['trofismo'],
        ":motricidade"=>$_POST['motricidade'],

        ":mmii"=>$_POST['mmii'],
        ":mmss"=>$_POST['mmss'],
        ":cordencao"=>$_POST['dinamica'],
        ":marcha"=>$_POST['marcha'],
        ":forca"=>$_POST['forcaMuscular'],
        ":dor"=>$_POST['escalaDor'],
        ":tatil"=>$_POST['tatil'],
        ":termica"=>$_POST['termica'],
        ":dolorosa"=>$_POST['dolorosa'],
        ":diagnostico_fisio"=>$_POST['diagnosticoFisio'],
        ":objetivo"=>$_POST['objetivos'],
        ":id_paciente"=>$_POST['iden'],
        ":id_usuario"=>$_SESSION['usuario'],
        ":diagnostico_cl"=>$_POST['diagnosticoClinico'],
        
    ));
    $hoje = date('y/m/d');
    $sql = "INSERT INTO tb_evolucao(id_paciente,	data,	obs,	curso	)VALUE(:paciente,:dia, :obs,:curso)";
    $stmt = $cbd->prepare($sql);
    $stmt ->execute(array(
        ":paciente"=>$_POST['iden'],
        ":dia" => $hoje,
        ":obs"=>$_POST['evolucao'],
        ":curso"=>"Neurologico",
    ));

    header('location: ../menu.php');
    



 }
    

?>