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
    
    
    $query = "SELECT * FROM tb_traumatologica WHERE id_paciente = :id";
    $stmt = $cbd-> prepare($query);
    $stmt ->bindValue(":id", $paciente);
    $stmt ->execute();

    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    $query = "SELECT * FROM tb_evolucao WHERE id_paciente = :id AND curso=:curso ";
    $stmt = $cbd-> prepare($query);
    $stmt ->bindValue(":id", $paciente);
    $stmt ->bindValue(":curso", "Traumatologico");
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
    $pdf->ezText("\n<h1> N° do prontuário".$dados['id_traumatologica']." </h1>\n"); 

    $pdf->ezText("\n<h1> Vista anterior </h1>\n"); 
    $pdf->ezText("Cabeça: ".$dados['a_cabeca']."<br>"); 
    $pdf->ezText("Altura dos ombros.: ".$dados['a_ombros']."<br>");
    $pdf->ezText("Claviculas ".$dados['a_claviculas']."<br>");
    $pdf->ezText("Linha alba: ".$dados['a_alba']."<br>");
    $pdf->ezText("Teste de Adams: ".$dados['a_adams']."<br>");
    $pdf->ezText("Altura das mãos:   ".$dados['a_maos']."<br>");
    $pdf->ezText("Cristas ilíacas:   ".$dados['a_iliacas']."<br>");
    $pdf->ezText("Espinha ilíaca antero-superior:   ".$dados['a_eias']."<br>");
    $pdf->ezText("Joelhos:    ".$dados['a_joelhos']."<br>");
    $pdf->ezText("Patelas:  ".$dados['a_patelas']."<br>");
    $pdf->ezText("Pés:    ".$dados['a_pes']."<br>");
    $pdf->ezText("Halux:  ".$dados['a_halux']."<br>");



    // ----------------------dados do pronturario 2
    $pdf->ezText("\n<h1> Vista lateral </h1>\n"); 
    $pdf->ezText("Cabeça: ".$dados['l_cabeca']."<br>");
    $pdf->ezText("Cervical: ".$dados['l_cervica']."<br>");
    $pdf->ezText("Ombro: ".$dados['l_ombro']."<br>");
    $pdf->ezText("Mãos:   ".$dados['l_maos']."<br>");
    $pdf->ezText("Dorso: ".$dados['l_dorso']."<br>");
    $pdf->ezText("Abdômen: ".$dados['l_abdomen']."<br>");
    $pdf->ezText("Lombar:   ".$dados['l_lombar']."<br>");
    $pdf->ezText("Tronco: ".$dados['l_tronco']."<br>");
    $pdf->ezText("Joelhos:   ".$dados['l_joelho']."<br>");

    
    // ----------------------dados do pronturario 2
    $pdf->ezText("\n<h1> Vista Posterior </h1>\n"); 
    $pdf->ezText("Cabeça: ".$dados['p_cabeca']."<br>");
    $pdf->ezText("Escápula: ".$dados['p_escapula']."<br>");
    $pdf->ezText("Altura dos Ombros: ".$dados['ombro']."<br>");
    $pdf->ezText("Teste de Adams:   ".$dados['p_adams']."<br>");
    $pdf->ezText("Local: ".$dados['p_local']."<br>");
    $pdf->ezText("EIPIs: ".$dados['p_eipi']."<br>");
    $pdf->ezText("Prega glútea:   ".$dados['p_prega']."<br>");
    $pdf->ezText("Linha Poplítea: ".$dados['p_poplítea']."<br>");
    $pdf->ezText("Calcâneo:   ".$dados['p_calcâneo']."<br>");
    

// ----------------------dados do pronturario 3
    $pdf->ezText("\n<h1> Avaliação </h1>\n"); 
    $pdf->ezText("Diagrama corporal: ".$dados['diagrama']."<br>");
    $pdf->ezText("Queixa principal: ".$dados['queixa']."<br>");
    $pdf->ezText("História da doença atual: ".$dados['hda']."<br>");
    $pdf->ezText("História da doença progressa:   ".$dados['hdp']."<br>");
    $pdf->ezText("História de doença familiares: ".$dados['hdf']."<br>");
    $pdf->ezText("Outras patologias: ".$dados['outras']."<br>");

// ----------------------dados do pronturario 4
    $pdf->ezText("\n<h1> Avaliação Objetiva </h1>\n"); 
    $pdf->ezText("Qualidade da marcha: ".$dados['marcha']."<br>");
    $pdf->ezText("Inspeçao geral: ".$dados['inspecao']."<br>");
    $pdf->ezText("Palpação Superficial e Profunda: ".$dados['palpacao']."<br>");
    $pdf->ezText("Perimetria:   ".$dados['perimetria']."<br>");
    $pdf->ezText("Testes especiais: ".$dados['especias']."<br>");

// ----------------------dados do pronturario 5
    $pdf->ezText("\n<h1> Exames </h1>\n"); 
    $pdf->ezText("Exames complementares: ".$dados['complementares']."<br>");
    $pdf->ezText("Observações: ".$dados['obs']."<br>");
    $pdf->ezText("Objetivos e propostas de tratamento fisioterápico: ".$dados['objetivos']."<br>");

    
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