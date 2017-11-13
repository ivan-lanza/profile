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
                        <h4>Cadastrar Novo Slider</h4>
                        <p class="text-danger"><strong>Atenção:A foto deve ter o seguinte tamanho.</strong> <br> <strong>Altura:</strong> 1595px <br> <strong>Largura:</strong> 706px</p>
                    </div>  
                    <div class="base-form col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <input type="text" name="link_slider" class="form-control" placeholder="Link" required autofocus>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                   <input type="file" name="img_slider">
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <button type="submit" class="btn btn-primary" name="btn_slider">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                        <?php
                            if($insert_slider){
                                echo "
                                    <div class='alert alert-success alert-dismissible fade in' role='alert'> 
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>×</span>
                            </button> 
                            <h4>Muito Bem</h4> 
                            <p>Um novo slider foi cadastrado com sucesso. <br>
                                Acesse a <a href=index.php target=_blank>página inicial</a> para visualizar o novo slider.</p> 
                            <p> 
                                <a href='new-slider.php'>
                                    <button type='button' class='btn btn-success'>Cadastrar Novo Slider</button> 
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