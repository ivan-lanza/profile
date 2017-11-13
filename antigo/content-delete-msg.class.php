<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Agência Profile</title>
    
    <?php
        include('connect.class.php');
        include('functions.class.php');
    
        $id_msg = $_GET['id_msg'];
        
            
    ?>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container-adm col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="container-form col-xs-12 col-sm-12 col-md-6 col-mg-6 col-lg-offset-3">
                    <div class="page-header">
                        <h4>Excluir Mensagem 
                            <div class="pull-right">
                                <a href="view-msg.php">
                                    <button type="button" class="btn btn-primary btn-xs">Visualizar Mensagens</button>
                                </a>
                            </div>
                        </h4>
                        
                    </div>  
                    <div class="base-form col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                           <table class="table table-hover"> 
                               <thead> 
                                   <tr> 
                                       <th>Nome</th> 
                                       <th>Email</th> 
                                       <th>Telefone</th> 
                                       <th>Mensagem</th> 
                                       <th></th> 
                                   </tr> 
                               </thead> 
                               <tbody> 
                                   <?php
                                        if($get_del_msg){
                                            $list_del_msg = mysqli_fetch_array($get_del_msg);
                                           
                                        }
                                   ?>
                                    <form method="post">
                                         <tr> 
                                           <td><?php echo $list_del_msg[name_contact]; ?></td> 
                                           
                                           <td><?php echo $list_del_msg[email_contact]; ?></td> 
                                           <td><?php echo $list_del_msg[tel_contact]; ?></td> 
                                           <td><?php echo $list_del_msg[msg_contact]; ?></td> 
                                           <td>
                                                <button type="submit" class="btn btn-danger btn-xs" name="btn_del_msg">
                                                    Confirmar Exclusão
                                                </button>   
                                           </td> 
                                       </tr>    
                                       </form>
                                    <?php
                                        if($delete_msg){
                                            echo "
                                                <div class='alert alert-success alert-dismissible fade in' role='alert'> 
                                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                        <span aria-hidden='true'>×</span>
                                                    </button> 
                                                    <h4>Muito Bem</h4> 
                                                    <p>Mensagem excluida com sucesso.</p>  
                                                </div>
                                            ";
                                        }
                                    ?>
                               </tbody> 
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>