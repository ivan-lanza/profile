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
    ?>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container-adm col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="container-form col-xs-12 col-sm-12 col-md-6 col-mg-6 col-lg-offset-3">
                    <div class="page-header">
                        <h4>Administradores Cadastrados 
                            <div class="pull-right">
                                <a href="new-user-adm.php">
                                    <button type="button" class="btn btn-success btn-xs">Cadastrar Novo Administrador</button>
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
                                        if($get_view_adm){
                                            while($list_view_adm = mysqli_fetch_array($get_view_adm)){
                                                echo "
                                                     <tr> 
                                                       <td>$list_view_adm[name_adm]</td> 
                                                       <td>$list_view_adm[email_adm]</td> 
                                                       <td>
                                                        <a href='delete-user-adm.php?id_adm=$list_view_adm[id_adm]'>
                                                            <button type='button' class='btn btn-danger btn-xs'>Excluir</button>   
                                                        </a>
                                                       </td> 
                                                   </tr>    
                                                ";
                                            }
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