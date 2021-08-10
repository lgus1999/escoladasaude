<?php
    require_once("../pdo.php");
    session_start();
    $cont = 0;

    if(isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['DataNasc']) && isset($_POST['sexo']) && isset($_POST['raca'])
    && isset($_POST['estadoCivil']) && isset($_POST['profissao']) && isset($_POST['numeroCasa']) && isset($_POST['rua']) && isset($_POST['bairro']) && isset($_POST['cidade']) && isset($_POST['mae'])){

      
        
        $stmt = $cbd->prepare("SELECT * FROM tb_paciente");
        $stmt->execute();
        while( $dados = $stmt->fetch(PDO::FETCH_ASSOC)){

            if($dados['cpf'] == $_POST['cpf']){
                $cont = 1;        
            }

        }
           if($cont != 1){
            $sql = "INSERT INTO tb_paciente(nome,	cpf,	dt_nasc,	sexo,	raca, civil,	profissao,	rua,	cidade,	bairro,	numero, mae, telefone)VALUE(:nome,:cpf,:DataNasc,:sexo,:raca,:estadoCivil,:profissao,:rua,:cidade,:bairro,:numeroCasa, :mae,:telefone)";
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
                ":cidade" =>$_POST['cidade'],
                ":telefone" =>$_POST['telefone'],
                ":mae" => $_POST['mae'] ));

                header("Location: ../menu.php?codigo=2");    
            }
            else{
                header("Location: paciente.php?codigo=1");
            }


    
    
    }
?>