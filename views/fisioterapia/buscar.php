
                        <?php
                        session_start();
                        require_once('pdo.php');

                        echo $_SESSION['local'];


                        $sql = "SELECT * FROM tb_paciente WHERE cpf = :busca";
                        $stmt = $cbd->prepare($sql);
                        $stmt->execute(array(
                            ":busca" => $_POST['buscar']
                        ));
                        $dado = $stmt->fetch(PDO::FETCH_ASSOC);
                        if($dado['cpf'] == $_POST['buscar']){
                            $_SESSION['id_paciente'] = $dado['id_paciente'];


                            switch($_SESSION['local']){

                              
                                case "neuro":
                                        $query = "SELECT * FROM tb_neurologica WHERE id_paciente = :id";
                                        $stmt = $cbd->prepare($query);
                                        $stmt ->bindValue(':id', $_SESSION['id_paciente']);   
                                        $stmt->execute();                    
                                        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        if(empty($rs)){

                                            header('location:ficha_neurologica.php');
                                        }else{
                                            header('location:editar_neurologica.php');
                                        }
                                    
                                
                                    break;
                                case "trauma":
                                        $query = "SELECT * FROM tb_traumatologica WHERE id_paciente = :id";
                                        $stmt = $cbd->prepare($query);
                                        $stmt ->bindValue(':id', $_SESSION['id_paciente']);   
                                        $stmt->execute();                    
                                        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        if(empty($rs)){

                                            header('location:ficha_traumatologica.php');
                                        }else{
                                            header('location:editar_traumatologica.php');
                                        }
                                    
                                    break;
                                
                              
                            }
                        }else{
                            

                            header('location:menu.php');
                            
                        }

                        ?>
                        