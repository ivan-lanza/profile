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
                        <h4>Cadastrar Conteúdo Quem Somos</h4>
                        <p class="text-danger"><strong>Atenção:A foto deve ter o seguinte tamanho.</strong> <br> <strong>Altura:</strong> 835px <br> <strong>Largura:</strong> 789px</p>
                    </div>  
                    <div class="base-form col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <input type="text" name="name_about" class="form-control" placeholder="Digite o Nome">
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <input type="text" name="function_about" class="form-control" placeholder="Digite o Cargo">
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <textarea class="form-control" name="txt_about" placeholder="Digite o conteúdo" autofocus required></textarea>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label>Foto:</label>
                                    <input type="file" name="img_about">
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <button type="submit" class="btn btn-primary" name="btn_about">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                        <?php
                            if($insert_about){
                                echo "
                                    <div class='alert alert-success alert-dismissible fade in' role='alert'> 
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>×</span>
                            </button> 
                            <h4>Muito Bem</h4> 
                            <p>Conteúdo cadastrado com sucesso.</p> 
                            <p> 
                                <a href='index.php' target='_blank'>
                                    <button type='button' class='btn btn-default'>Visualizar Conteúdo Cadastrado</button> 
                                </a>
                            </p> 
                        </div>
                                ";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>