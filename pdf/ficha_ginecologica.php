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
    
    
    $query = "SELECT * FROM tb_ginecologica WHERE id_paciente = :id";
    $stmt = $cbd-> prepare($query);
    $stmt ->bindValue(":id", $paciente);
    $stmt ->execute();

    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    $query = "SELECT * FROM tb_evolucao WHERE id_paciente = :id AND curso=:curso ";
    $stmt = $cbd-> prepare($query);
    $stmt ->bindValue(":id", $paciente);
    $stmt ->bindValue(":curso", "Ginecologico");
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
}
    $pdf->ezText("\n<h1> Dados clínicos </h1>\n"); 
    $pdf->ezText("Quantidade de gravidez: ".$dados['qtd_gravidez']."<br>");
    $pdf->ezText("Quantidade de partos: ".$dados['qtd_partos']."<br>");
    $pdf->ezText("Quantidade de aborto: ".$dados['qtd_abortos']."<br>");
    $pdf->ezText("Inicio da vida sexual: ".$dados['vida_sexual']."<br>");
    $pdf->ezText("Antecedentes Cirúgicos: ".$dados['ant_cirurgicos']."<br>");
    $pdf->ezText("Peso:   ".$dados['peso']."<br>");
    $pdf->ezText("Ultima Prevensão: ".$dados['ult_prevensao']."<br>");
    $pdf->ezText("Anticocepcional: ".$dados['anticocepcional']."<br>");
    $pdf->ezText("Queixas:   ".$dados['queixa']."<br>");
    $pdf->ezText("Pressão Arterial: ".$dados['pre_arterial']."<br>");

// ----------------------dados do pronturario 2
    $pdf->ezText("\n<h1> Características ginecológicas </h1>\n"); 
    $pdf->ezText("Vulva: ".$dados['vulva']."<br>");
    $pdf->ezText("Conteúdo Vaginal: ".$dados['cont_vaginal']."<br>");
    $pdf->ezText("Colo Uterino: ".$dados['colo_uterino']."<br>");
    $pdf->ezText("Teste de Schiller: ".$dados['Schiller']."<br>");
    $pdf->ezText("Iodo:   ".$dados['iodo']."<br>");
   
// ---------------------Evolução
    $pdf->ezText("\n<h1> Evolução do paciente </h1>\n");
    while($dadosEvolucao = $stmt->fetch(PDO::FETCH_ASSOC)){
        $timestamp = strtotime($dadosEvolucao['data']);
        $new_date = date("d-m-Y", $timestamp);
             $pdf->ezText("Data: ".$new_date." |  Evolução: ".$dadosEvolucao['obs']."\n");

    }



    // external links

    if (isset($_GET['d']) && $_GET['d']) {
        echo $pdf->ezOutput(true);
    } else {
        $pdf->ezStream(['compress' => 0]);
    }
}