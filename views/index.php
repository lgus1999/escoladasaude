<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
 <link rel="stylesheet" href="../css/bootstrap.min.css">


</head>

<body class="center-form">
  <?php
    if(isset($_GET['codigo']) && $_GET['codigo'] == 1){
      echo "<script>alert('Cadastrado com sucesso! Aguardando autorização');</script>";
    }
  ?>
   <style>

body{
  width:100%;
  height: auto;
  background-image: url(../imagens/bgmenu.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}


  body.center-form {
    min-height: 100vh;
    font-family:'Product Sans';
    src: url('FONTES/PRODUCT SANS');


  }

  div.center-form {
    position: relative;
    min-height: 100vh;

  }

  div.center-form > form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
    background-color:#409ace;
    padding: 50px;
    padding-top: 30px;
    padding-bottom: 30px;

    border-radius: 20px;
}

.grande{
    width: 90%;
}
</style>

<div class="center-form">
  <form action="login.php" method="post" class="border">
   
    <div class="row">
        <div class="col-lg-12">
            <h2 style="text-align:center; color: white;"><b>L O G I N</b></h2>
                </div>
                    </div><br>

    <div class="row">
        <div class="col col-lg-12">
            <label style="color: white; font-size: 14px;" for="nome">Nome de usuário</label>
                <input type="text" name="nome"  class="form-control" required autocomplete ="off">
                    </div>
                         </div><br>
    

          <div class="row">
              <div class="col col-lg-12">
                  <label style="color: white; font-size: 14px;" for="senha">Senha</label>
                      <input type="password" name="senha"  class="form-control" required autocomplete ="off">
                          </div>
                              </div>

          <br>

   <div class="row d-flex justify-content-center">
                <button class="btn grande" style="background-color: #fd8a00; color: white">Entrar</button>
            </div><br>

            <div class="row d-flex justify-content-center">
          <a href="" role="button" class="btn btn-default" style="color: white;">Esqueci minha senha</a>      
            </div>

      <div class="row d-flex justify-content-center">
          <a href="cadastro.php" role="button" class="btn btn-default" style="color: white;">Ainda não sou registrado</a>      
            </div>

            




  </form>
</div>
</body>

</html>