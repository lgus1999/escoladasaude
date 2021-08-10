<?php
include_once("../pdo.php");

if(isset($_POST['editar'])){

    $query="UPDATE tb_gestante SET qtd_aborto=:aborto,qtd_parto=:parto,qtd_gravidez=:gravidez,dum=:dum,dpp=:dpp,natimorto=:natimorto,amamentacao=:amamentacao,peso=:peso,
    ant_diabete =:ant_diabete,ant_hipertensao=:ant_hipertensao,ant_eclampsia=:ant_eclampsia,ant_trombo=:ant_trombo,ant_doe_mental=:ant_doe_mental,ant_cardiopatia=:ant_cardio,
    prematuro=:prematuro, isoimunizacao=:isoimunizacao,inf_urinaria=:inf_urinaria,oligo=:oligo,cardiopatia=:cardiopatia,tabagismo=:tabagismo,diab_gest=:diab_gest,
    eclampsia=:eclampsia,hipertensao=:hipertensao,datismo=:datismo,hemorragia=:hemorragia,ciur=:ciur,st_vaciana=:st_vaciana,influenza=:influenza,dose1=:dose1,dose2=:dose2,dose3=:dose3
    WHERE id_paciente = :paciente";

    $stmt = $cbd->prepare($query);
    $stmt -> execute(array(
        ":aborto"=>$_POST['qtdAbortos'],
        ":parto"=>$_POST['qtdPartos'],
        ":gravidez"=>$_POST['qtdGravidez'],
        ":dum"=>$_POST['dum'],
        ":dpp"=>$_POST['dpp'],
        ":natimorto"=>$_POST['natimortos'],
        ":amamentacao"=>$_POST['amamentacao'],
        ":peso"=>$_POST['pesoPrevio'],

        ":ant_diabete"=>$_POST['ant-diabetes'],
        ":ant_hipertensao"=>$_POST['ant-hipertensao'],
        ":ant_eclampsia"=>$_POST['ant-eclampsia'],
        ":ant_trombo"=>$_POST['ant-tromboembolismo'],
        ":ant_doe_mental"=>$_POST['ant-doencaMental'],
        ":ant_cardio"=>$_POST['ant-cardiopatia'],

        ":prematuro"=>$_POST['partoPrematuro'],
        ":isoimunizacao"=>$_POST['isoimunizacao'],
        ":inf_urinaria"=>$_POST['infeccaoUrinaria'],
        ":oligo"=>$_POST['oligo'],
        ":cardiopatia"=>$_POST['cardiopatia'],
        ":tabagismo"=>$_POST['tabagismo'],
        ":diab_gest"=>$_POST['diabetesGestacional'],
        ":eclampsia"=>$_POST['eclampsia'],
        ":hipertensao"=>$_POST['hipertensao'],
        ":datismo"=>$_POST['datismo'],
        ":hemorragia"=>$_POST['hemorragia'],
        ":ciur"=>$_POST['ciur'],

        ":st_vaciana"=>$_POST['vacina'],
        ":influenza"=>$_POST['influenza'],
        ":dose1"=>$_POST['dose1'],
        ":dose2"=>$_POST['dose2'],
        ":dose3"=>$_POST['dose3'],
        ":paciente"=>$_POST['id_paciente'],
    ));
    
    if(!empty($_POST['evolucao'])){
        $hoje = date('y/m/d');
        $query = "INSERT INTO tb_evolucao(id_paciente, data, obs, curso) VALUE (:id,:data,:obs,:curso)";
        $stmt = $cbd->prepare($query);
        $stmt ->execute(array(
            ":id"=>$_POST['id_paciente'],
            ":data"=>$hoje,
            ":obs"=>$_POST['evolucao'],
            ":curso"=>"Gestante",
        ));

    }
    header('location: ../menu.php');
}


?>