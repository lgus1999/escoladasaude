<?php

if(isset($_GET['id'])){
    include_once('../pdo.php');
    $paciente = $_GET['id'];

    $query = "SELECT * FROM tb_paciente WHERE id_paciente = :id";
    $stmt = $cbd->prepare($query);
    $stmt -> bindValue(':id',$paciente);
    $stmt->execute();

    $dados = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($dados);
}
?>