<?php


    if(isset($_POST['id'])){
        $paciente = $_POST['id'];
        include_once('../pdo.php');

        $query = "DELETE FROM tb_paciente WHERE id_paciente = :id";
        $stmt = $cbd->prepare($query);
        $stmt -> bindValue(':id', $paciente);
        $stmt -> execute();

    }


?>