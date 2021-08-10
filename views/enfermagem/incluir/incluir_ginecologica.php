<?php
    include_once("../pdo.php");
    session_start();
    
    if(isset($_POST['salvar'])){

        $query = "INSERT INTO tb_ginecologica(qtd_gravidez, qtd_partos,	qtd_abortos, vida_sexual,ant_cirurgicos,peso,ult_prevensao,anticocepcional,queixa,pre_arterial,vulva,cont_vaginal,colo_uterino,Schiller,iodo,id_usuario,id_paciente)
        VALUE(:gravidez,:partos,:abortos,:vida_s,:ant_cir,:peso,:prevensao,:anticoce,:queixa,:arterial,:vulva,:conteudo,:colo,:schiller,:iodo,:usuario, :paciente)";

        $stmt = $cbd->prepare($query);
        $stmt->execute(array(
            ":gravidez"=>$_POST["qtdGravidez"],
            ":partos"=>$_POST["qtdPartos"],
            ":abortos"=>$_POST["qtdAbortos"],
            ":vida_s"=>$_POST["inicioSexo"],
            ":ant_cir"=>$_POST["antecedentes"],
            ":peso"=>$_POST["peso"],
            ":prevensao"=>$_POST["DataPrev"],
            ":anticoce"=>$_POST["usoAnticocepcional"],
            ":queixa"=>$_POST["queixas"],
            ":arterial"=>$_POST["pressao"],
            ":vulva"=>$_POST["vulva"],
            ":conteudo"=>$_POST["conteudoVaginal"],
            ":colo"=>$_POST["coloUterino"],
            ":schiller"=>$_POST["schiller"],
            ":iodo"=>$_POST["Iodo"],
            ":usuario"=>$_SESSION['usuario'],
            ":paciente"=>$_SESSION['id_paciente']

        ));
        $hoje = date('y/m/d');
        $query = "INSERT INTO tb_evolucao(id_paciente, data, obs, curso) VALUE (:id,:data,:obs,:curso)";
        $stmt = $cbd->prepare($query);
        $stmt ->execute(array(
            ":id"=>$_SESSION['id_paciente'],
            ":data"=>$hoje,
            ":obs"=>$_POST['evolucao'],
            ":curso"=>"Ginecologico",
        ));

        
        
        header("location: ../menu.php");
        
    }

?>