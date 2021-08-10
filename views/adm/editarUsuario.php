<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>

<body class="center-form">
<?php
    if(isset($_GET['erro']) && $_GET['erro'] == 3){
      echo "<script>alert('Erro ao cadastrar! Tente novamente ou comunique ao suporte');</script>";
    }
  ?>
    <style>
        body{
        width:auto;
        height: auto;
        background-image: url(../imagens/cadastro2.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;

        }


        body.center-form {
            min-height: 90vh;
            font-family: 'Product Sans';
            src: url('FONTES/PRODUCT SANS');
        }
        
        div.center-form {
            position: relative;
            min-height: 95vh;
            border-color: black;
        }
        
        div.center-form>form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
            padding: 50px;
            padding-top: 20px;
            border-radius: 20px;
            border-width: thin;
            border-style: solid;
            border-color: #409ace;
            background-color: white;
        }
        
        
        .grande {
            width: 100%;
        }
    </style>

    <div class="center-form">
        <form action="cadastraUsuário.php" method="POST" class="border">

            <div class="row">
                <div class="col-lg-12">
                    <h2 style="text-align:center; color: #409ace"><b>Cadastre-se</b></h2>               
                     </div>
            </div>

            <div class="row">
                <div class="col col-lg-12">
                    <label for="nome">Nome completo</label>
                    <input type="text" name="nome" class="form-control">
                </div>
            </div>


            <div class="row">
                <div class="col col-lg-12">
                    <label for="nomeUser">Nome de usuário (login)</label>
                    <input type="text" name="nomeUser" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col col-lg-12">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control">
                </div>
            </div>

              <div class="row">
                        <div class="col col-lg-12">
                            <label for="">Curso</label>
                            <select name="area" class="form-control">
            <option></option>
            <option value="enfermagem">Enfermagem</option>
            <option value="fisioterapia">Fisioterapia</option>
            </select></div></div>

            <br>
            <div class="row d-flex justify-content-center">
                <button class="btn btn-primary grande">editar</button>
            </div><br>

            <div class="row d-flex justify-content-center">
                <a role="button" class="btn btn-link btn-block" href="menu.php">Voltar ao menu</a>
            </div>


        </form>
    </div>
</body>

</html>