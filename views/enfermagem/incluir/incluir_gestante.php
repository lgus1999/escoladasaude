<?php
include_once("../pdo.php");
session_start();

if(isset($_POST['salvar'])){

    $query="INSERT INTO tb_gestante(qtd_aborto,	qtd_parto,	qtd_gravidez,	dum,	dpp,	natimorto,	amamentacao,	peso,ant_diabete,ant_hipertensao, ant_eclampsia,	ant_trombo,	ant_doe_mental,	ant_cardiopatia,prematuro,	isoimunizacao,	inf_urinaria,	oligo,	cardiopatia,tabagismo,	diab_gest,	eclampsia,	hipertensao,	datismo,	hemorragia,	ciur,	st_vaciana,	influenza,	dose1,	dose2,dose3, id_usuario,	id_paciente)
    VALUE(:aborto, :parto, :gravidez, :dum, :dpp, :natimorto, :amamentacao,:peso,:ant_diabete,:ant_hipertensao, :ant_eclampsia,:ant_trombo,:ant_doe_mental,:ant_cardiopatia,:prematuro,:isoinizacao,:inf_urinaria,:oligo, :cardiopatia,:tabagismo, :diab_gest,:eclampsia,:hipertensao,:datismo,:hemorragia, :ciur, :st_vacina, :influenza, :dose1,:dose2,:dose3,:usuario,:paciente)
    ";
    $stmt = $cbd->prepare($query);
    $stmt ->execute(array(
        ":aborto"=>$_POST['qtdAbortos'],
        ":parto"=>$_POST['qtdPartos'],
        ":gravidez"=>$_POST['qtdGravidez'],
        ":dum"=>$_POST['dum'],
        ":dpp"=>$_POST['dpp'],
        ":natimorto"=>$_POST['natimortos'],
        ":amamentacao"=>$_POST['amamentacao'],
        ":peso"=>$_POST['pesoPrevio'],
        ":ant_diabete"=>$_POST['ant_diabetes'],
        ":ant_hipertensao"=>$_POST['ant_hipertensao'],
        ":ant_eclampsia"=>$_POST['ant_eclampsia'],
        ":ant_trombo"=>$_POST['ant_tromboembolismo'],
        ":ant_doe_mental"=>$_POST['ant_doencaMental'],
        ":ant_cardiopatia"=>$_POST['ant_cardiopatia'],
        ":prematuro"=>$_POST['partoPrematuro'],
        ":isoinizacao"=>$_POST['isoimunizacao'],
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
        ":st_vacina"=>$_POST['vacina'],
        ":influenza"=>$_POST['influenza'],
        ":dose1"=>$_POST['dose1'],
        ":dose2"=>$_POST['dose2'],
        ":dose3"=>$_POST['dose3'],
        ":usuario"=>$_SESSION['usuario'],
        ":paciente"=>$_POST['id_paciente'],
    ));

    $query = "INSERT INTO tb_evolucao(id_paciente, data, obs, curso)VALUE(:paciente, :dia, :obs, :curso)";
    $stmt = $cbd->prepare($query);
    $hoje = date('y/m/d');
    $stmt->execute(array(
        ":paciente" => $_POST['id_paciente'],
        ":dia" => $hoje,
        ":obs"=>$_POST['evolucao'],
        ":curso"=>"Gestante"

    ));

    header('location: ../menu.php');
}





?>