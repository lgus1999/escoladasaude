<?php
include_once("../../pdo.php");
session_start();
if(isset($_POST['editar'])){
    $query = "UPDATE tb_ginecologica SET 
    qtd_gravidez=:gravidez, qtd_partos=:partos,qtd_abortos=:abortos,
    vida_sexual=:vida_sexual,ant_cirurgicos=:cirurgicos, peso =:peso,
    ult_prevensao=:prevensao, anticocepcional =:anticoce, queixa=:queixa,
    pre_arterial=:pressao, vulva =:vulva,cont_vaginal=:vaginal,colo_uterino =:uterino,
    Schiller=:schiller, iodo=:iodo WHERE id_paciente = :paciente";
    
    $stmt = $cbd->prepare($query);
    $stmt ->execute(array(
        ":gravidez"=>$_POST['qtdGravidez'],
        ":partos"=>$_POST['qtdPartos'],
        ":abortos"=>$_POST['qtdAbortos'],
        ":vida_sexual"=>$_POST['inicioSexo'],
        ":cirurgicos"=>$_POST['antecedentes'],
        ":peso"=>$_POST['peso'],
        ":prevensao"=>$_POST['DataPrev'],
        ":anticoce"=>$_POST['usoAnticocepcional'],
        ":queixa"=>$_POST['queixas'],
        ":pressao"=>$_POST['pressao'],
        ":vulva"=>$_POST['vulva'],
        ":vaginal"=>$_POST['conteudoVaginal'],
        ":uterino"=>$_POST['coloUterino'],
        ":schiller"=>$_POST['schiller'],
        ":iodo"=>$_POST['Iodo'],
        ":paciente"=>$_POST['iden']
        
    ));

    if(!empty($_POST['evolucao'])){
        $hoje = date('y/m/d');
        $query = "INSERT INTO tb_evolucao(id_paciente, data, obs, curso) VALUE (:id,:data,:obs,:curso)";
        $stmt = $cbd->prepare($query);
        $stmt ->execute(array(
            ":id"=>$_SESSION['id_paciente'],
            ":data"=>$hoje,
            ":obs"=>$_POST['evolucao'],
            ":curso"=>"Ginecologico",
        ));
    }
    header('location:../menu.php');

}
?>