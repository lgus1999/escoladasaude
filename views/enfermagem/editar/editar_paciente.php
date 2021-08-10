<?php
    if(isset($_POST['edit'])){
        include_once("../pdo.php");
        echo $_POST['identificador'];

        $query = "UPDATE tb_paciente SET nome=:nome, cpf = :cpf, sexo=:sexo,civil=:civil,dt_nasc=:nasc,
        raca=:raca,profissao=:profissao,mae=:mae,numero=:numero,rua=:rua,bairro=:bairro,cidade=:cidade,
        telefone=:telefone WHERE id_paciente=:id";

        $stmt = $cbd->prepare($query);
        $stmt->execute(array(
            ":nome"=>$_POST['nome'],
            ":cpf"=>$_POST['cpf'],
            ":sexo"=>$_POST['sexo'],
            ":civil"=>$_POST['civil'],
            ":nasc"=>$_POST['DataNasc'],
            ":raca"=>$_POST['raca'],
            ":profissao"=>$_POST['profissao'],
            ":mae"=>$_POST['mae'],
            ":numero"=>$_POST['numeroCasa'],
            ":rua"=>$_POST['rua'],
            ":bairro"=>$_POST['bairro'],
            ":cidade"=>$_POST['cidade'],
            ":telefone"=>$_POST['telefone'],
            ":id"=>$_POST['identificador']
        ));
        header("location: ../menu.php");


    }

?>