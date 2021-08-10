<?php
  include_once("../pdo.php");
  

  if(isset($_POST["profissional"]) && isset($_POST["Data"]) && isset($_POST["Hora"])){


      $sql = "INSERT INTO tb_agendamentos(curso,	data,	hora,	id_paciente) VALUE (:prof, :dat, :hora, :pac)";
      $stmt = $cbd->prepare($sql);
      $stmt->execute(array(
          ":prof" => $_POST["profissional"],
          ":dat" => $_POST["Data"],
          ":hora" =>$_POST["Hora"],
          ":pac" =>$_POST['id']
      ));

     
      header("location: ../menu.php?codigo=2");
 

  }
?>