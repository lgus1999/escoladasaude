<?php

include_once('../pdo.php');

if(isset($_GET['dia']) && isset($_GET['curso'])){

    $sql= "SELECT * FROM tb_agendamentos WHERE data = :dia AND curso=:curso";
    $stmt = $cbd->prepare($sql);
    $stmt->execute(array(
        ':dia'=>$_GET['dia'],
        ":curso"=>$_GET['curso']
    ));
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    
   }
   else{
    echo 'não foi passado nenhum parâmetro';
   }
    
?>