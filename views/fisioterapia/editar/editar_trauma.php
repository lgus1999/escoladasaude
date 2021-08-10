<?php
    if(isset($_POST['editar'])){
        include_once("../pdo.php");
        
        $query = "UPDATE tb_traumatologica SET a_cabeca=:a_cabeca,a_ombros=:a_ombros,a_claviculas=:a_claviculas,a_alba=:a_alba,a_adams=:a_adams,a_maos=:a_maos,a_iliacas=:a_iliacas,a_eias=:a_eias,a_joelhos=:a_joelhos,a_patelas=:a_patelas,a_pes=:a_pes,a_halux=:a_halux,
        l_cabeca=:l_cabeca,l_cervica=:l_cervica,l_ombro=:l_ombro,l_maos=:l_maos,l_dorso=:l_dorso,l_abdomen=:l_abdomen,l_lombar=:l_lombar,l_pelvel=:l_pelvel,l_tronco=:l_tronco,l_joelho=:l_joelho,
        p_cabeca=:p_cabeca,p_ombro=:p_ombro,p_escapula=:p_escapula,p_adams=:p_adams,p_local=:p_local,p_eipi=:p_eipi,p_prega=:p_prega,p_poplitea=:p_poplitea,p_calcaneo=:p_calcaneo,
        diagrama=:diagrama,queixa=:queixa,hda=:hda,hdp=:hdp,hdf=:hdf,outras=:outras,marcha=:marcha,inspecao=:inspecao,palpacao=:palpacao,perimetria=:perimetria,especiais=:especiais,complementares=:complementares,obs=:obs,objetivos=:objetivos WHERE id_paciente=:paciente";

        $stmt=$cbd->prepare($query);
        $stmt->execute(array(
            ":a_cabeca"=>$_POST['cabeca'],
            ":a_ombros"=>$_POST['alturaOmbros'],
            ":a_claviculas"=>$_POST['claviculas'],
            ":a_alba"=>$_POST['linhaAlba'],
            ":a_adams"=>$_POST['testeAdams'],
            ":a_maos"=>$_POST['alturaMaos'],
            ":a_iliacas"=>$_POST['cristas'],
            ":a_eias"=>$_POST['eias'],
            ":a_joelhos"=>$_POST['joelhos'],
            ":a_patelas"=>$_POST['patelas'],
            ":a_pes"=>$_POST['pes'],
            ":a_halux"=>$_POST['halux'],
    
            ":l_cabeca"=>$_POST['Lcabeca'],
            ":l_cervica"=>$_POST['Lcervical'],
            ":l_ombro"=>$_POST['Lombro'],
            ":l_maos"=>$_POST['Lmaos'],
            ":l_dorso"=>$_POST['Ldorso'],
            ":l_abdomen"=>$_POST['Labdomen'],
            ":l_lombar"=>$_POST['Llombar'],
            ":l_pelvel"=>$_POST['Lpelve'],
            ":l_tronco"=>$_POST['Ltronco'],
            ":l_joelho"=>$_POST['Ljoelhos'],
           
            ":p_cabeca"=>$_POST['Pcabeca'],
            ":p_ombro"=>$_POST['PalturaOmbro'],
            ":p_escapula"=>$_POST['Pescapulas'],
            ":p_adams"=>$_POST['PtesteAdams'],
            ":p_local"=>$_POST['Plocal'],
            ":p_eipi"=>$_POST['Peipis'],
            ":p_prega"=>$_POST['PpregaGlutea'],
            ":p_poplitea"=>$_POST['PlinhaPoplitea'],
            ":p_calcaneo"=>$_POST['Peipis2'],
    
            ":diagrama"=>$_POST['diagramaCorporal'],
            ":queixa"=>$_POST['queixaPrincipal'],
            ":hda"=>$_POST['hda'],
            ":hdp"=>$_POST['doencaPregressa'],
            ":hdf"=>$_POST['doencasFamiliares'],
            ":outras"=>$_POST['outrasPatologias'],
            ":marcha"=>$_POST['qualidadeMarcha'],
            ":inspecao"=>$_POST['inspecaoGeral'],
            ":palpacao"=>$_POST['inspecaoSuperficial'],
            ":perimetria"=>$_POST['perimetria'],
            ":especiais"=>$_POST['testesEspeciais'],
            ":complementares"=>$_POST['examesComplementares'],
            ":obs"=>$_POST['observacoes'],
            ":objetivos"=>$_POST['propostaTerapeutica'],
            ":paciente"=>$_POST['iden'],

        ));
        $hoje = date('y/m/d');
        $sql = "INSERT INTO tb_evolucao(id_paciente,	data,	obs,	curso	)VALUE(:paciente,:dia, :obs,:curso)";
        $stmt = $cbd->prepare($sql);
        $stmt ->execute(array(
            ":paciente"=>$_POST['iden'],
            ":dia" => $hoje,
            ":obs"=>$_POST['evolucao'],
            ":curso"=>"Traumatologico",
        ));
        header('location: ../menu.php');


    }


?>