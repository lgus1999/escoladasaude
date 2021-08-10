<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de paciente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>

<body class="center-form">
    <style>

         body{
        width:auto;
        height: auto;
        background-image: url(../imagens/cadastro.jpg);
         background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

        }
        body.center-form {
            min-height: 100vh;
            font-family: 'Product Sans';
            src: url('FONTES/PRODUCT SANS');
        }

        div.center-form {
            position: relative;
            min-height: 100vh;
            border-color: black;
        }

        div.center-form>form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
            padding-right: 90px;
            padding-left: 90px;
            padding-top: 8px;
            padding-bottom: 20px;
            border-radius: 20px;
            border-width: thin;
            border-style: solid;
            border-color: #409ace;
            background-color: white;
        }

        .row {
            color: black;
        }

        .grande {
            width: 100%;
        }
    </style>
  
    <div class="center-form">
        <form action="incluir/incluir_paciente.php" class="border" method="POST">

            <div class="row">
                <div class="col-sm-12">
        <h3 style="color: #409ace"><b>Cadastrar paciente</b></h3>
    </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h4><b>Dados pessoais</b></h4>
                </div>
            </div>

            <div class="row">
                <div class="col col-sm-6">
                    <label for="nome">Nome completo</label>
                    <input type="text" name="nome" class="form-control" required autocomplete="off">
                </div>
                 <div class="col col-sm-6">
                    <label for="nome">Nome da mãe</label>
                    <input type="text" name="mae" class="form-control" required autocomplete="off">
                </div>
            </div>

    
            <div class="row">
                <div class="col col-sm-6">
                    <script type="text/javascript">
                        function mascara(i) {

                            var v = i.value;

                            if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
                                i.value = v.substring(0, v.length - 1);
                                return;
                            }

                            i.setAttribute("maxlength", "14");
                            if (v.length == 3 || v.length == 7) i.value += ".";
                            if (v.length == 11) i.value += "-";

                        }
                    </script>

                    <label for="cpf">CPF</label>
                    <input oninput="mascara(this)" type="text" name="cpf" class="form-control" required autocomplete="off" />
                </div>

                <div class="col col-sm-6">
                    <label for="DataNasc">Data de nascimento</label>
                    <input type="date" name="DataNasc" class="form-control" required autocomplete="off">
                </div>
            </div>


            <div class="row">
                <div class="col col-sm-6">
                    <label for="">Sexo</label>
                    <select name="sexo" class="form-control" required autocomplete="off">
                        <option></option>
                        <option value="Femenino">Feminino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="">Raça</label>
                    <select name="raca" class="form-control" required autocomplete="off">
                        <option></option>
                        <option value="Branca">Branca</option>
                        <option value="Preta">Preta</option>
                        <option value="Amarela">Amarela</option>
                        <option value="Parda">Parda</option>
                        <option value="Indígena">Indígena</option>
                        <option value="Sem declaração">Sem declaração</option>
                    </select>
                </div>
            </div>


            <div class="row">
                <div class="col col-sm-6">
                    <label for="">Estado civil</label>
                    <select name="estadoCivil" class="form-control" required autocomplete="off">
                        <option></option>
                        <option value="Casado">Casado</option>
                        <option value="Solteiro">Solteiro</option>
                        <option value="Divorciado">Divorciado</option>
                        <option value="Separado">Separado</option>
                        <option value="Viúvo">Viúvo</option>
                    </select>
                </div>


                <div class="col col-sm-6">
                    <label for="">Profissão</label>
                    <input type="text" name="profissao" class="form-control" required autocomplete="off">
                </div>
            </div><br>



            <div class="row">
                <div class="col col-sm-6">
                    <h4><b>Endereço</b></h4>
                </div>
            </div>

            <div class="row">
                <div class="col col-sm-6">
                    <label for="">Número</label>
                    <input type="text" name="numeroCasa" class="form-control" required autocomplete="off">
                </div>
                <div class="col col-sm-6">
                    <label for="">Rua</label>
                    <input type="text" name="rua" class="form-control" required autocomplete="off">
                </div>
            </div>



            <div class="row">
                <div class="col col-sm-6">
                    <label for="">Bairro</label>
                    <input type="text" name="bairro" class="form-control" required autocomplete="off">
                </div>
                <div class="col col-sm-6">
                    <label for="">Cidade</label>
                    <input type="text" name="cidade" class="form-control" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col col-sm-6">
                <label for="">Telefone</label>
                    <input type="text" name="telefone" class="form-control" required autocomplete="off">
                        
                </div> 
            </div>
            <br><br>


           
            <div class="row d-flex justify-content-center">
                <button role="button" class="btn btn-primary btn-block" style="color:white">Cadastrar</button></div>

            <div class="row d-flex justify-content-center">
                <a role="button" class="btn btn-link btn-block" onClick="history.go(-1)">Voltar ao menu</a>
            </div>






        </form>
    </div>
</body>

</html>

<?php
    require_once("pdo.php");
    
    $cont = 0;

    if(isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['DataNasc']) && isset($_POST['sexo']) && isset($_POST['raca'])
    && isset($_POST['estadoCivil']) && isset($_POST['profissao']) && isset($_POST['numeroCasa']) && isset($_POST['rua']) && isset($_POST['bairro']) && isset($_POST['cidade'])){

      
        
        $stmt = $cbd->prepare("SELECT * FROM paciente");
        $stmt->execute();
        while( $dados = $stmt->fetch(PDO::FETCH_ASSOC)){

            if($dados['cpf'] == $_POST['cpf']){
                $cont = 1;        
            }

        }
           if($cont != 1){
            $sql = "INSERT INTO paciente(nome,	cpf,	dataNasc,	sexo,	raça,	estado_civil,	profissao,	rua,	cidade,	bairro,	numero)VALUE(:nome,:cpf,:DataNasc,:sexo,:raca,:estadoCivil,:profissao,:rua,:cidade,:bairro,:numeroCasa)";
            $stmt = $cbd->prepare($sql);
            $stmt->execute(array(
                ":nome" =>$_POST['nome'],
                ":cpf" =>$_POST['cpf'],
                ":DataNasc" =>$_POST['DataNasc'],
                ":sexo" =>$_POST['sexo'],
                ":raca" =>$_POST['raca'],
                ":estadoCivil" =>$_POST['estadoCivil'],
                ":profissao" =>$_POST['profissao'],
                ":numeroCasa" =>$_POST['numeroCasa'],
                ":rua" =>$_POST['rua'],
                ":bairro" =>$_POST['bairro'],
                ":cidade" =>$_POST['cidade']));
                header("Location: paciente.php?codigo=2");    
            }
            else{
                header("Location: paciente.php?codigo=1");
            }


    
    
    }
?>