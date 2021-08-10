<?php

set_time_limit(1800);
set_include_path('repositorio/src/'.PATH_SEPARATOR.get_include_path());

if(isset($_POST["consulta"])){

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

    include_once('../views/pdo.php');
    $curso = $_POST['curso'];
    $inicio = $_POST['data_inicial'];
    $fim = $_POST['data_final'];


  if($curso == "todos"){
    $query = "SELECT * FROM tb_evolucao WHERE data between :inicio and :fim";
    $stmt = $cbd->prepare($query);
    $stmt ->execute(array(
        ":inicio" => $inicio,
        "fim" => $fim
    ));

  }else{
      
    $query = "SELECT * FROM tb_evolucao WHERE curso=:curso and data between :inicio and :fim";
    $stmt = $cbd->prepare($query);
    $stmt ->execute(array(
        ":curso" => $curso,
        ":inicio" => $inicio,
        "fim" => $fim
    ));
    
   
    $i = 0;
   while($valor = $stmt->fetch(PDO::FETCH_ASSOC)){
        $paciente = "SELECT nome FROM tb_paciente WHERE id_paciente=:id ";
        $consulta = $cbd->prepare($paciente);
        $consulta->execute(array(
            ":id"=>$valor['id_paciente']
        ));
        $nome = $consulta->fetch(PDO::FETCH_ASSOC);

        $i++;
        $timestamp = strtotime($valor['data']);
        $new_date = date("d-m-Y", $timestamp);
        $pdf->ezText($i." -  ".$new_date. ' - '.$nome['nome']. ' - '.$valor['curso'] );
       
        
        } if(empty($valor)){
            $pdf->ezText("\n\nTotal de atendimentos realizados: ".$i);
        }
  }


    

 
// ----------------------dados do paciente







    // external links

    if (isset($_GET['d']) && $_GET['d']) {
        echo $pdf->ezOutput(true);
    } else {
        $pdf->ezStream(['compress' => 0]);
    }
}