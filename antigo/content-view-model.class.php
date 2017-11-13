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
                        <h4>Visualizar Modelos </h4>
                        <div class="pull-right">
                                <a href="new-model.php">
                                    <button type="button" class="btn btn-primary btn-xs">Cadastrar Novo Modelo</button>
                                </a>
                            </div>
                    </div>  
                    <div class="base-form col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                           <table class="table table-hover"> 
                               <thead> 
                                   <tr> 
                                       <th>Foto</th> 
                                       <th>Nome</th> 
                                       <th>Idade</th>
                                       <th></th> 
                                   </tr> 
                               </thead> 
                               <tbody> 
                                   <?php
                                        if($get_view_model){
                                            while($list_view_model = mysqli_fetch_array($get_view_model)){
                                                echo "
                                                     <tr> 
                                                       <td><img src='$list_view_model[profileimg_model]' class='img-table-view-camp'></td> 
                                                       <td>$list_view_model[name_model]</td> 
                                                       <td>$list_view_model[birth_model]</td> 
                                                       <td>
                                                        <a href='delete-model.php?id_model=$list_view_model[id_model]'>
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