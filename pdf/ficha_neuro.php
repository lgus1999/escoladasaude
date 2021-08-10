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
    
    
    $query = "SELECT * FROM tb_neurologica WHERE id_paciente = :id";
    $stmt = $cbd-> prepare($query);
    $stmt ->bindValue(":id", $paciente);
    $stmt ->execute();

    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    $query = "SELECT * FROM tb_evolucao WHERE id_paciente = :id AND curso=:curso ";
    $stmt = $cbd-> prepare($query);
    $stmt ->bindValue(":id", $paciente);
    $stmt ->bindValue(":curso", "Neurologico");
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
$timestamp = strtotime($dadospaciente['dt_nasc']);
$new_date = date("d-m-Y", $timestamp);
    $pdf->ezText("<h1> Dados do paciente </h1>\n");
    $pdf->ezText("Nome:     ".$dadospaciente['nome']."<br>");
    $pdf->ezText("CPF:        ".$dadospaciente['cpf']."<br>");
    $pdf->ezText("Data de Nascimento: ".$new_date."<br>");
    $pdf->ezText("Mae:        ".$dadospaciente['mae']."<br>");
    $pdf->ezText("Telefone:  ".$dadospaciente['telefone']."<br>");
//----------------------dados do prontuário
if(empty($dados)){
 
    $pdf->ezText("\n<h1> nao tem dados </h1>\n");
}else{
    $pdf->ezText("\n<h1> Avaliações das difusões </h1>\n"); 
    $pdf->ezText("Queixa Principal: ".$dados['queixa']."<br>"); 
    $pdf->ezText("H.M.P. e H.M.A.: ".$dados['hmp']."<br>");
   
 // ----------------------dados do pronturario 2
    $pdf->ezText("\n<h1> Dados clínicos </h1>\n"); 
    $pdf->ezText("P.A.S: ".$dados['pas']."<br>");
    $pdf->ezText("FC: ".$dados['fc']."<br>");
    $pdf->ezText("FR: ".$dados['fr']."<br>");
    $pdf->ezText("Diagnóstico clínico:   ".$dados['diagnostico_cl']."<br>");
    $pdf->ezText("Exames complementares:   ".$dados['compelmentares']."<br>");
    $pdf->ezText("Antecedentes cirúrgicos:   ".$dados['antecedentes']."<br>");
    $pdf->ezText("Patologia associada:    ".$dados['patologia']."<br>");
    $pdf->ezText("Medicamentos:  ".$dados['mendicamento']."<br>");


    // ----------------------dados do pronturario 3
    $pdf->ezText("\n<h1> Exames Neuro-funcionais </h1>\n"); 
    $pdf->ezText("Motricidade voluntária: ".$dados['motricidade_vol']."<br>");
    $pdf->ezText("Inspeção: ".$dados['inspecao']."<br>");
    $pdf->ezText("Palpação: ".$dados['palpacao']."<br>");
    $pdf->ezText("Reflexo:   ".$dados['reflexo']."<br>");
    $pdf->ezText("Tônus muscular: ".$dados['tonus']."<br>");
    $pdf->ezText("Trofismo: ".$dados['trofismo']."<br>");
    $pdf->ezText("Motricidade:   ".$dados['motricidade']."<br>");
    

// ----------------------dados do pronturario 3
    $pdf->ezText("\n<h1> Teste especiais </h1>\n"); 
    $pdf->ezText("Teste para MMII: ".$dados['mmii']."<br>");
    $pdf->ezText("Teste para MMSS: ".$dados['mmss']."<br>");
    $pdf->ezText("Coordenação dinâmica: ".$dados['cordenacao']."<br>");
    $pdf->ezText("Marcha:   ".$dados['marcha']."<br>");
    $pdf->ezText("Força muscular: ".$dados['forca']."<br>");
    $pdf->ezText("Escala de dor: ".$dados['anticocepcional']."<br>");
    $pdf->ezText("tatil:   ".$dados['tatil']."<br>");
    $pdf->ezText("Térmica: ".$dados['termica']."<br>");
    $pdf->ezText("Dolorosa: ".$dados['dolorosa']."<br>");
   $pdf->ezText("Diagnóstico do fisioteraêutico : ".$dados['diagnostico_fisio']."<br>");
    $pdf->ezText("Objetivo do tratamento: ".$dados['objetivo']."<br>");

    
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