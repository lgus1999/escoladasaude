<?php
   require_once('pdo.php'); 
   if(isset($_GET['dia'])){

    $sql= "SELECT * FROM testes Where dia = :dia";
    $stmt = $cbd->prepare($sql);
    $stmt->execute(array(
        ':dia'=>$_GET['dia']
    ));
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
   }
   else{
       
   }
    
    
  
?>