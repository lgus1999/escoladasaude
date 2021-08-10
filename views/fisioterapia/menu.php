
<!DOCTYPE html>
<html lang="en">
<?php
    include_once('pdo.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.11.2.js"></script>
    <script type="text/javascript">
        jQuery(window).load(function($) {
            atualizaRelogio();
        });
    </script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bem-vindo !</title>
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">




</head>

<body style=" font-family: 'Product Sans';
    src: url('FONTES/PRODUCT SANS');">

    <nav>
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>
        <input type="checkbox" id="check">

        <img src="../../imagens/logoES.png" id="logo" alt="some text" width=200 height=auto>
        <ul id="menu">



            <li>
                <a class="a" href="buscarPaciente.php?codigo=neuro">
                    <t id="t">Ficha Neurológica</t>
                </a>


            </li>
            <li>
                <a class="a" href="buscarPaciente.php?codigo=trauma">
                    <t id="t">Ficha Traumatológica</t>
                </a>

            </li>
            
            <li>
                <a class="a" href="../logout.php">
                    <t id="t">Sair</t>
                </a>
            </li>

        </ul>
    </nav>


    <div class="table-responsive tabelas" style="padding-right: 55px; padding-left: 55px;">
        <h4>Lista de Agendamentos</h4>

    <table class="table table-striped table-bordered table-condensed table-hover table-sm tabelas">

      <thead>

        <tr>
          <th style="width: 40%" scope="col">Nome</th>
          <th style="width: 20%" scope="col">CPF</th>
          <th style="width: 10%" scope="col">hora</th>
          <th style="width: 10%" scope="col">Triagem</th>
          <th style="width: 10%" scope="col">Concluir</th>
          <th style="width: 10%" scope="col">Cancelar</th>
        </tr>
      </thead>
      <tbody>
         <?php
            $hoje = date('Y/m/d');
            $sql = "SELECT * From tb_agendamentos WHERE data=:valor ORDER BY hora";
            $stmt = $cbd->prepare($sql);
            $stmt->bindValue(':valor',$hoje);
            $stmt ->execute();
        
            while($agendamentos = $stmt->fetch(PDO::FETCH_ASSOC)){
                
                $paciente = "SELECT * FROM tb_paciente WHERE id_paciente = :id";
                $consulta = $cbd->prepare($paciente);
                $consulta->bindValue(':id', $agendamentos['id_paciente']);
                $consulta->execute();
                $res = $consulta->fetch(PDO::FETCH_ASSOC);
             
            echo "
            <tr style='text-align: center;'>
            
            <td>". $res['nome']."</td>
            <td>". $res['cpf']."</td>
            <td>". $agendamentos['hora']."</td>
            <td><box-icon name='show-alt'></box-icon></td>
            <td><box-icon name='check'></box-icon></td>
            <td><box-icon name='x' ></box-icon></td>
            
            
            </tr>
            ";
            }if(empty($dado)){
            echo "
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>";
            }
            
         ?>
      
       
      </tbody>
    </table>
</div><br>

<div class="table-responsive tabelas" style="padding-right: 55px; padding-left: 55px;">
  <h4>Lista de Pacientes</h4>
    <table class="table table-striped table-bordered table-condensed table-hover table-sm tabelas" >

        <thead>

            <tr>
            <th style="width: 30%" scope="col">Nome</th>
            <th style="width: 8%" scope="col">CPF</th>
            <th style="width: 20%" scope="col">Nome da mãe</th>
            <th style="width: 8%" scope="col">Data de nascimento</th>
            <th style="width: 8%" scope="col">Número</th>
            <th style="width: 8%" scope="col">Editar</th>
            

            </tr>
        </thead>
        <tbody>

        <?php

            
            $sql = "SELECT * From tb_paciente ORDER BY nome";
            $stmt = $cbd->prepare($sql);
            $stmt ->execute();
        

            while($dado = $stmt->fetch(PDO::FETCH_ASSOC)){
        
            $timestamp = strtotime($dado['dt_nasc']);
            $new_date = date("d-m-Y", $timestamp);

            echo "
            <tr style='text-align: center;'>
            
            <td>". $dado['nome']."</td>
            <td>". $dado['cpf']."</td>
            <td>". $dado['mae']."</td>
            <td>". $new_date."</td>
            <td>". $dado['telefone']."</td>
            <td> <a href ='editarpaciente.php?id=".$dado['id_paciente']."'> <box-icon type='solid' name='edit'></box-icon> </a> </td>
            
            </tr>
            ";
            }if(empty($dado)){
            echo "
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>";
            }
        
        ?>

        </tbody>
    </table>
</div>
























        <?php
    if (isset($_GET['codigo']) && $_GET['codigo'] == 2 ) {
        switch ($_GET['codigo']) {
            case 1:
                echo "<script>alert('Erro ao cadastrar!');</script>";
                break;

            case 2:
                echo "<script>alert('Cadastrado com sucesso!');</script>";
                break;
        }
        $_GET['codigo'] = null;
    }
    ?>


</body>

</html>