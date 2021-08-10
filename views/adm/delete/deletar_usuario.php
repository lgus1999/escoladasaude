<?php

    if(isset($_POST['id'])){
        $user = $_POST['id'];
        include_once('../pdo.php');
    
        $query = "DELETE FROM usuario WHERE id_usuario = :id";
        $stmt = $cbd->prepare($query);
        $stmt -> bindValue(':id', $user);
        $stmt -> execute();
    
    }

?>