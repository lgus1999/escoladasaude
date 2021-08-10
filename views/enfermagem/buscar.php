
                        <?php
                        session_start();
                        require_once('pdo.php');


                        $sql = "SELECT * FROM tb_paciente WHERE cpf = :busca";
                        $stmt = $cbd->prepare($sql);
                        $stmt->execute(array(
                            ":busca" => $_POST['buscar']
                        ));
                        $dado = $stmt->fetch(PDO::FETCH_ASSOC);
                        if($dado['cpf'] == $_POST['buscar']){
                            $_SESSION['id_paciente'] = $dado['id_paciente'];
                            switch($_SESSION['local']){
                              
                                case "gineco":
                                    $query = "SELECT * FROM tb_ginecologica WHERE id_paciente = :id";
                                    $stmt = $cbd->prepare($query);
                                    $stmt ->bindValue(':id', $_SESSION['id_paciente']);   
                                    $stmt->execute();                    
                                    $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    if(empty($rs)){

                                        header('location:ficha_ginecologica.php');
                                    }else{
                                        header('location:editar_fichaGineco.php');
                                    }
                                    
                                    break;
            
                                case "gestante":
                                    $query = "SELECT * FROM tb_gestante WHERE id_paciente = :id";
                                    $stmt = $cbd->prepare($query);
                                    $stmt ->bindValue(':id', $_SESSION['id_paciente']);   
                                    $stmt->execute();                    
                                    $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    if(empty($rs)){
                                        header('location:ficha_gestante.php');
                                    }else{
                                        header('location:editar_fichaGestante.php');
                                    }    
                                        
                                    break;
                                case "agendamento":
                                    header("Location:agendamento.php");
                                    break;
                                case "triagem":
                                    header("location:triagem.php");
                                    break;
                              
                            }
                        }else{
                            if(isset($_GET["loc"])){
                                switch($_GET["loc"]){

                                    case 1:
                                        header('Location:buscarPaciente.php?erro=3');
                                        break;
                                    case 2:
                                        header('Location:buscarPaciente2.php?erro=3');
                                        break;
                                }

                            }
                            
                        }

                        ?>
                        