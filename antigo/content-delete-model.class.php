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
    
        $id_model = $_GET['id_model'];
        
            
    ?>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container-adm col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="container-form col-xs-12 col-sm-12 col-md-6 col-mg-6 col-lg-offset-3">
                    <div class="page-header">
                        <h4>Excluir Modelo 
                            <div class="pull-right">
                                <a href="view-model.php">
                                    <button type="button" class="btn btn-primary btn-xs">Visualizar Modelos</button>
                                </a>
                            </div>
                        </h4>
                        
                    </div>  
                    <div class="base-form col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                           <table class="table table-hover"> 
                               <thead> 
                                   <tr> 
                                       <th>Foto</th> 
                                       <th>Nome</th> 
                                       <th>Idade</th> 
                                       <th>Sexo</th> 
                                       <th>Cabelos</th> 
                                       <th>Olhos</th> 
                                       <th>Etnia</th> 
                                       <th></th> 
                                   </tr> 
                               </thead> 
                               <tbody> 
                                   <?php
                                        if($get_del_model){
                                            $list_del_model = mysqli_fetch_array($get_del_model);
                                           
                                        }
                                   ?>
                                    <form method="post">
                                         <tr> 
                                           <td><img src="<?php echo $list_del_model[profileimg_model]; ?>" class="img-table-view-camp"></td> 
                                           
                                           <td><?php echo $list_del_model[name_model]; ?></td> 
                                           <td><?php echo $list_del_model[birth_model]; ?></td> 
                                           <td><?php echo $list_del_model[sex_model]; ?></td> 
                                           <td><?php echo $list_del_model[haircolor_model]; ?></td> 
                                           <td><?php echo $list_del_model[eyecolor_model]; ?></td> 
                                           <td><?php echo $list_del_model[color_model]; ?></td> 
                                           <td>
                                                <button type="submit" class="btn btn-danger btn-xs" name="btn_del_model">
                                                    Confirmar Exclusão
                                                </button>   
                                           </td> 
                                       </tr>    
                                       </form>
                                    <?php
                                        if($delete_model){
                                            echo "
                                                <div class='alert alert-success alert-dismissible fade in' role='alert'> 
                                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                        <span aria-hidden='true'>×</span>
                                                    </button> 
                                                    <h4>Muito Bem</h4> 
                                                    <p>Modelo excluido com sucesso.</p>  
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