
<?php
session_start();
include_once("pdo.php");
   
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];


    $query = "SELECT * FROM usuario WHERE login=:nome AND senha=:pass";
    $stmt = $cbd->prepare($query);
    $stmt -> bindValue(":nome",$nome);
    $stmt -> bindValue(":pass", $senha);
    $stmt -> execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    if($results['valida']){
        if(!empty($results)){

            $_SESSION['usuario'] = $results['id_usuario'];
            if($results['curso'] == 'enfermagem'){
                header('location: enfermagem/menu.php');
            }else if($results['curso']== 'fisioterapia'){
                header('location: fisioterapia/menu.php');
            }
    
    
        }else{
            header("location: index.php");
        }
    }else{
        header("location: index.php");
    }
   
?>