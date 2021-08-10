<!DOCTYPE html>
<html lang="en">
<?php
  require_once("pdo.php");

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <title>Bem-vindo !</title>
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/jquery-3.6.0.min.js" type="text/javascript"></script>

    <style>
      .tabelas{
        
        height:200px;
        overflow-y:auto;
      }
      box-icon:hover{
        cursor: pointer;
      }.tabelas td{
        text-align: center;
      }


    </style>
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
                <a class="a" href="relatorio.php">
                    <t id="t">Relatório atendimento</t>
                </a>
            </li>
   
            <li>
                <a class="a" href="incluirpaciente.php">
                    <t id="t">Cadastro de paciente</t>
                </a>
            </li>
            <li>
                <a class="a" href="agendamento.php">
                    <t id="t">Agendar</t>
                </a>
            </li>

        </ul>
    </nav>
    <br>
<div class="row">
    <div class="col col-lg-12">
        <h2 style="text-align: center;">Área do administrador</h2>
    </div>
</div>

<div class="table-responsive tabelas" style="padding-right: 55px; padding-left: 55px;">
        <h4>Lista de usuários</h4>

    <table class="table table-striped table-bordered table-condensed table-hover table-sm tabelas">

      <thead>

        <tr>
          <th style="width: 5%" scope="col">Validar</th>
          <th style="width: 5%" scope="col">ID</th>
          <th style="width: 40%" scope="col">Nome</th>
          <th style="width: 20%"scope="col">Nome de usuário</th>
          <th style="width: 15%" scope="col">Editar</th>
          <th style="width: 15%" scope="col">excluir</th>

        </tr>
      </thead>
      <tbody>

      <?php
        $query = "SELECT * FROM usuario ORDER BY nome";
        $stmt = $cbd->prepare($query);
        $stmt -> execute();


        while($valor = $stmt->fetch(PDO::FETCH_ASSOC)){
        
          echo "<tr>
        <td><input type='checkbox' value = '".$valor['id_usuario']."' class='check' "; if($valor['valida'] )echo "checked"; echo " ></td>
            <td>".$valor['id_usuario']."</td>
            <td>".$valor['nome']."</td>
            <td>".$valor['login']."</td>
            <td ><a href='editarUsuario.php?id=".$valor['id_usuario']."'><box-icon type='solid' name='edit'></box-icon></a></td>
            <td class ='lixo_user' title='".$valor['id_usuario']."' ><box-icon name='trash' ></box-icon></td>
          
          </tr>";
        }if(empty($valor)){
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

<script>
    $('.check').click(function(){
      var id;
      id = $(this).val()
      	
      $.post( "editar/editar_usuario.php?id="+id,function(data){
        alert(data);
      }); 
    });
    $('.lixo_user').click(function(e){
      var id = $(this).attr('title');
      var retorno = confirm("Deseja excluir o usuário "+id+"?!");
      if(retorno){
        $.ajax({
        type: 'POST',
        data:"id="+id,
        url:'delete/deletar_usuario.php',
        async:true
          }).done(function(data){
            window.location.reload();
      })
      }
     
    });

</script>

<div class="table-responsive tabelas" style="padding-right: 55px; padding-left: 55px;">
    <h4>Lista de Pacientes</h4>
<table class="table table-striped table-bordered table-condensed table-hover table-sm tabelas" >

  <thead>

    <tr>
      <th style="width: 12%" scope="col">Nome</th>
      <th style="width: 8%" scope="col">CPF</th>
      <th style="width: 12%" scope="col">Nome da mãe</th>
      <th style="width: 8%" scope="col">Data de nascimento</th>
      <th style="width: 8%" scope="col">Número</th>
      <th style="width: 8%" scope="col">Editar</th>
      <th style="width: 8%" scope="col">Excluir</th>

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
      <td class ='lixo_paciente' title='".$dado['id_paciente']."'><box-icon name='trash' ></box-icon></td>
    </tr>
      ";
    }if(empty($dado)){
      echo "
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>";
    }
  
  ?>
  
 

  </tbody>
</table></div>
<script>
 $('.lixo_paciente').click(function(e){
      var id = $(this).attr('title');
      var retorno = confirm("Deseja excluir este paciente ?!");
      if(retorno){
        $.ajax({
        type: 'POST',
        data:"id="+id,
        url:'delete/deletar_paciente.php',
        async:true
          }).done(function(data){
            window.location.reload();
      })
      }
     
    });

</script>
</body>

</html>


