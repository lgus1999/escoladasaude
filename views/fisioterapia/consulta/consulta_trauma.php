<?php

if(isset($_GET['valor'])){
    
    
    
    include_once("../pdo.php");



    $id = $_GET['valor'];

    $query = "SELECT * FROM tb_traumatologica WHERE id_paciente = :id";
    $stmt = $cbd-> prepare($query);
    $stmt ->bindValue(":id", $id);
    $stmt ->execute();
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));




}

?>