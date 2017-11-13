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
    
        $id_adm = $_GET['id_adm'];
        
            
    ?>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container-adm col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="container-form col-xs-12 col-sm-12 col-md-6 col-mg-6 col-lg-offset-3">
                    <div class="page-header">
                        <h4>Excluir Administradores 
                            <div class="pull-right">
                                <a href="new-user-adm.php">
                                    <button type="button" class="btn btn-success btn-xs">Cadastrar Novo Administrador</button>
                                </a>   
                                <a href="view-user-adm.php">
                                    <button type="button" class="btn btn-primary btn-xs">Visualizar Administradores</button>
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
                                       <th></th> 
                                   </tr> 
                               </thead> 
                               <tbody> 
                                   <?php
                                        if($get_del_adm){
                                            $list_del_adm = mysqli_fetch_array($get_del_adm);
                                        }
                                   ?>
                                    <form method="post">
                                         <tr> 
                                           <td><?php echo $list_del_adm[name_adm]; ?></td> 
                                           
                                           <td><?php echo $list_del_adm[email_adm]; ?></td> 
                                           <td>
                                                <button type="submit" class="btn btn-danger btn-xs" name="btn_del_adm">
                                                    Confirmar Exclusão
                                                </button>   
                                           </td> 
                                       </tr>    
                                       </form>
                                    <?php
                                        if($delete_adm){
                                            echo "
                                                <div class='alert alert-success alert-dismissible fade in' role='alert'> 
                                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                        <span aria-hidden='true'>×</span>
                                                    </button> 
                                                    <h4>Muito Bem</h4> 
                                                    <p>O usuário $list_del_adm[name_adm] foi excluido com sucesso.</p>  
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