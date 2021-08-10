<?php

    if(isset($_POST['editar'])){
    include_once('../pdo.php');

        $query = "UPDATE tb_neurologica SET queixa=:queixa,hmp=:hmp,pas=:pas,fc=:fc,fr=:fr,compelmentares=:complementares,antecedentes=:antecedentes,
        patologia=:patologia,mendicamento=:medicamento,motricidade_vol=:motricidade_vol,inspecao=:inspecao,palpacao=:palpacao,reflexo=:reflexo,
        tonus=:tonus,trofismo=:trofismo,motricidade=:motricidade,mmii=:mmii,mmss=:mmss,cordenacao=:cordenacao,marcha=:marcha,forca=:forca,dor=:dor,
        tatil=:tatil,termica=:termica,dolorosa=:dolorosa,diagnostico_fisio=:diagnostico_fisio,objetivo=:objetivo, diagnostico_cl=:diagnostico_cl 
        WHERE id_paciente=:paciente";

        $stmt = $cbd->prepare($query);
        $stmt->execute(array(
            ":queixa"=>$_POST['queixaPrincipal'],
            ":hmp"=>$_POST['hmp'],
            
            ":pas"=>$_POST['pas'],
            ":fc"=>$_POST['fc'],
            ":fr"=>$_POST['fr'],
            ":complementares"=>$_POST['examesComplementares'],
            ":antecedentes"=>$_POST['antecedentesCirurgicos'],
            ":patologia"=>$_POST['patologiaAssociada'],
            ":medicamento"=>$_POST['medicamentos'],
    
            ":motricidade_vol"=>$_POST['motricidadeVoluntaria'],
            ":inspecao"=>$_POST['inspecao'],
            ":palpacao"=>$_POST['palpacao'],
            ":reflexo"=>$_POST['reflexo'],
            ":tonus"=>$_POST['tonusMuscular'],
            ":trofismo"=>$_POST['trofismo'],
            ":motricidade"=>$_POST['motricidade'],
    
            ":mmii"=>$_POST['mmii'],
            ":mmss"=>$_POST['mmss'],
            ":cordenacao"=>$_POST['dinamica'],
            ":marcha"=>$_POST['marcha'],
            ":forca"=>$_POST['forcaMuscular'],
            ":dor"=>$_POST['escalaDor'],
            ":tatil"=>$_POST['tatil'],
            ":termica"=>$_POST['termica'],
            ":dolorosa"=>$_POST['dolorosa'],
            ":diagnostico_fisio"=>$_POST['diagnosticoFisio'],
            ":objetivo"=>$_POST['objetivos'],
            ":paciente"=>$_POST['iden'],
            ":diagnostico_cl"=>$_POST['diagnosticoClinico'],
        ));
    
        if(!empty($_POST['evolucao'])){
            $hoje = date('y/m/d');
            $query = "INSERT INTO tb_evolucao(id_paciente, data, obs, curso) VALUE (:id,:data,:obs,:curso)";
            $stmt = $cbd->prepare($query);
            $stmt ->execute(array(
                ":id"=>$_POST['iden'],
                ":data"=>$hoje,
                ":obs"=>$_POST['evolucao'],
                ":curso"=>"Neurologico",
            ));
        }
        header('location:../menu.php');


    }


?>