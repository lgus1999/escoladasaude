<?php
   
        include_once('../pdo.php');
        $curso = 'Ginecologico';
        $inicio = "2021-07-06";
        $fim = "2021-07-10";
      


      if($curso == "todos"){
        $query = "SELECT * FROM tb_evolucao WHERE between :inicio and :fim";
        $stmt = $cbd->prepare($query);
        $stmt ->execute(array(
            ":inicio" => $inicio,
            "fim" => $fim
        ));

      }else{
        $query = "SELECT * FROM tb_evolucao WHERE curso=:curso and data between :inicio and :fim";
        $stmt = $cbd->prepare($query);
        $stmt->execute(array(
          ':curso'=>$curso,
          ':inicio'=>$inicio,
          ':fim'=>$fim
        ));
        $valor = $stmt->fetch(PDO::FETCH_ASSOC);

        if(empty($valor)){
          echo 'vazio';
        }

      }

      echo "estou na pagina certa"

    

?>