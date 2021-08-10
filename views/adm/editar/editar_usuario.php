<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    include_once('../pdo.php');

    $query = "SELECT * FROM usuario WHERE id_usuario = $id";
    $stmt = $cbd->prepare($query);
    $stmt -> execute();

    $dado = $stmt->fetch(PDO::FETCH_ASSOC);

    $query = "UPDATE usuario SET valida = :x WHERE id_usuario = $id";
    $stmt = $cbd->prepare($query);
    $stmt -> bindValue(':x', !$dado['valida']);
    $stmt -> execute();

    $mensagem = "Alterado com sucesso";
    echo json_encode($mensagem);

   
}

?>