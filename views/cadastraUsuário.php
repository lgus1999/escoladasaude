<?php

    if(isset($_POST['nome']) && isset($_POST['nomeUser']) && isset($_POST['senha']) && isset($_POST['area'])){

        require_once('pdo.php');

        $sql="INSERT INTO usuario(nome, login, senha, curso, valida) VALUE(:nome, :user, :pass, :curso, :valida)";
        $stmt = $cbd->prepare($sql);
        $stmt -> bindValue(":nome", $_POST['nome']);
        $stmt -> bindValue(":user", $_POST['nomeUser']);
        $stmt -> bindValue(":pass", $_POST['senha']);   
        $stmt -> bindValue(":curso", $_POST['area']);
        $stmt -> bindValue(":valida", false);

        $stmt->execute();

        header('Location: index.php?codigo=1');

    }
    else{
     
    }

?>