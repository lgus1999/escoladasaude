<?php

set_time_limit(1800);
set_include_path('repositorio/src/'.PATH_SEPARATOR.get_include_path());

if(isset($_GET['id'])){
    include_once('../views/pdo.php');
    $paciente = $_GET['id'];

    $sql = "SELECT * FROM tb_paciente WHERE id_paciente = :id";
    $stmt = $cbd->prepare($sql);
    $stmt->execute(array(":id" => $paciente));
    $dadospaciente = $stmt->fetch(PDO::FETCH_ASSOC);
    
    
    $query = "SELECT * FROM tb_gestante WHERE id_paciente = :id";
    $stmt = $cbd-> prepare($query);
    $stmt ->bindValue(":id", $paciente);
    $stmt ->execute();

    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    $query = "SELECT * FROM tb_evolucao WHERE id_paciente = :id AND curso=:curso ";
    $stmt = $cbd-> prepare($query);
    $stmt ->bindValue(":id", $paciente);
    $stmt ->bindValue(":curso", "Gestante");
    $stmt ->execute();

 
    
    

    include 'Cezpdf.php';

    class Creport extends Cezpdf
    {
        public function Creport($p, $o)
        {
            $this->__construct($p, $o, 'none', []);
        }
    }
    $pdf = new Creport('a4', 'portrait');

    // IMPORTANT: In version >= 0.12.0 it is required to allow custom tags (by using $pdf->allowedTags) before using it
    $pdf->allowedTags .= '|comment:.*?';

    $pdf->ezSetMargins(20, 20, 20, 20);

    $pdf->selectFont('Helvetica');

// ----------------------dados do paciente
    $pdf->ezText("<h1> Dados do paciente </h1>\n");
    $pdf->ezText("Nome:     ".$dadospaciente['nome']."<br>");
    $pdf->ezText("CPF:        ".$dadospaciente['cpf']."<br>");
    $pdf->ezText("Data de Nascimento: ".$dadospaciente['dt_nasc']."<br>");
    $pdf->ezText("Mae:        ".$dadospaciente['mae']."<br>");
    $pdf->ezText("Telefone:  ".$dadospaciente['telefone']."<br>");
// ----------------------dados do prontuário
if(empty($dados)){
 
    $pdf->ezText("\n<h1> nao tem dados </h1>\n");
}else{
    $pdf->ezText("\n<h1> N° do prontuário: ".$dados['id_gestante']."<br> </h1>\n"); 
    $pdf->ezText("\n<h1> Antecedentes Obstétricos </h1>\n"); 
    $pdf->ezText("Quantidade de gravidez: ".$dados['qtd_gravidez']."<br>");
    $pdf->ezText("Quantidade de partos: ".$dados['qtd_parto']."<br>");
    $pdf->ezText("Quantidade de aborto: ".$dados['qtd_aborto']."<br>");
    $pdf->ezText("DUM: ".$dados['dum']."<br>");
    $pdf->ezText("DPP: ".$dados['dpp']."<br>");
    $pdf->ezText("Natimorto:   ".$dados['natimorto']."<br>");
    $pdf->ezText("Amamentação Materna: ".$dados['amamentacao']."<br>");
    $pdf->ezText("Peso Prévio: ".$dados['peso']."<br>");
  

// ----------------------dados do pronturario 2
    $pdf->ezText("\n<h1> Antecedentes Clínicos </h1>\n"); 
    $pdf->ezText("Diabetes: ".$dados['ant_diabet']."<br>");
    $pdf->ezText("Hipertensão: ".$dados['ant_hipertensao']."<br>");
    $pdf->ezText("Pré-Eclâmpsia: ".$dados['ant_eclampsia']."<br>");
    $pdf->ezText("tromboembolismo: ".$dados['ant_trombo']."<br>");
    $pdf->ezText("Doença mental:   ".$dados['ant_doe_mental']."<br>");
    $pdf->ezText("Cardiopatia:   ".$dados['ant_cardiopatia']."<br>");


// ----------------------dados do pronturario 3
   $pdf->ezText("\n<h1> Gestação atual </h1>\n"); 
   $pdf->ezText("Trabalho de parto prematuro: ".$dados['prematuro']."<br>");
   $pdf->ezText("Isoimunização RH: ".$dados['isoimunizacao']."<br>");
   $pdf->ezText("Infecção urinária: ".$dados['inf_urinaria']."<br>");
   $pdf->ezText("Oligopolidrâmnio: ".$dados['oligo']."<br>");
   $pdf->ezText("Cardiopatia:   ".$dados['cardiopatia']."<br>");
   $pdf->ezText("Tabagismo:   ".$dados['tabagismo']."<br>");
   $pdf->ezText("Diabetes Gestacional: ".$dados['diab_gest']."<br>");
   $pdf->ezText("Pré-Eclâmpsia: ".$dados['eclampsia']."<br>");
   $pdf->ezText("Hipertensão: ".$dados['hipertensao']."<br>");
   $pdf->ezText("Pós-Datismo: ".$dados['datismo']."<br>");
   $pdf->ezText("Hemorragia 1°T:   ".$dados['hemorragia']."<br>");
   $pdf->ezText("CIUR:   ".$dados['ciur']."<br>");

  
// ----------------------dados do pronturario 2
    $pdf->ezText("\n<h1> Sitauação da vacina </h1>\n"); 
    $pdf->ezText("Situação da vacina: ".$dados['st_vaciana']."<br>");
    $pdf->ezText("influenza: ".$dados['influenza']."<br>");
    $pdf->ezText("1° dose: ".$dados['dose1']."<br>");
    $pdf->ezText("2° dose: ".$dados['dose2']."<br>");
    $pdf->ezText("3° dose:   ".$dados['dose3']."<br>");





// ---------------------Evolução


    $pdf->ezText("\n<h1> Evolução do paciente </h1>\n");
    while($dadosEvolucao = $stmt->fetch(PDO::FETCH_ASSOC)){
        $timestamp = strtotime($dadosEvolucao['data']);
        $new_date = date("d-m-Y", $timestamp);
             $pdf->ezText("Data: ".$new_date." |  Evolução: ".$dadosEvolucao['obs']."\n");

    }

}

    // external links

    if (isset($_GET['d']) && $_GET['d']) {
        echo $pdf->ezOutput(true);
    } else {
        $pdf->ezStream(['compress' => 0]);
    }
}