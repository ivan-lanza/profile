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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page-header">
                        <h3>Administração do Site</h3>
                    </div> 
                </div> 
                <div class="container-item-info col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="item-info col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <span class="glyphicon glyphicon-user"></span> Administradores Cadastrados
                    </div>
                    <div class="item-info-content col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <h3><?php echo $count_adm; ?></h3>
                    </div>
                    <div class="item-info-content col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <a href="new-user-adm.php">
                            <button type="button" class="btn btn-primary btn-xs">Cadastrar Adm</button>
                        </a>
                        <a href="view-user-adm.php">
                            <button type="button" class="btn btn-warning btn-xs">Visualizar Adm</button>
                        </a>
                    </div>
                </div> 

                <div class="container-item-info col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="item-info col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <span class="glyphicon glyphicon-comment"></span> Mensagens Recebidas
                    </div>
                    <div class="item-info-content col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <h3><?php echo $count_msg; ?></h3>
                    </div>
                    <div class="item-info-content col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <a href="view-msg.php">
                            <button type="button" class="btn btn-primary btn-xs">Visualizar Mensagens</button>
                        </a>
                    </div>
                </div>

                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page-header">
                        <h3>Conteúdo do Site</h3>
                    </div> 
                </div> 

                <div class="container-item-info col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="item-info col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <span class="glyphicon glyphicon-picture"></span> Sliders Cadastrados
                    </div>
                    <div class="item-info-content col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <h3><?php echo $count_slider; ?></h3>
                    </div>
                    <div class="item-info-content col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <a href="new-slider.php">
                            <button type="button" class="btn btn-primary btn-xs">Cadastrar Slider</button>
                        </a>
                    </div>
                </div>
                <div class="container-item-info col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="item-info col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <span class="glyphicon glyphicon-book"></span> Quem Somos
                    </div>
                    <div class="item-info-content col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <h3><?php echo $count_about; ?></h3>
                    </div>
                    <div class="item-info-content col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <a href="new-about.php">
                            <button type="button" class="btn btn-primary btn-xs">Cadastrar Conteúdo</button>
                        </a>
                    </div>
                </div>
                <div class="container-item-info col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="item-info col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <span class="glyphicon glyphicon-book"></span> Campanha (Portifolio)
                    </div>
                    <div class="item-info-content col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <h3><?php echo $count_campain; ?></h3>
                    </div>
                    <div class="item-info-content col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <a href="new-campain.php">
                            <button type="button" class="btn btn-primary btn-xs">Cadastrar Campanha</button>
                        </a>
                        <a href="view-campain.php">
                            <button type="button" class="btn btn-warning btn-xs">Visualizar Campanhas</button>
                        </a>
                    </div>
                </div>
                <div class="container-item-info col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="item-info col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <span class="glyphicon glyphicon-book"></span> Modelos
                    </div>
                    <div class="item-info-content col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <h3><?php echo $count_model; ?></h3>
                    </div>
                    <div class="item-info-content col-xs-12 col-sm-12 col-md-4 col-lg-10 text-center">
                        <a href="new-model.php">
                            <button type="button" class="btn btn-primary btn-xs">Cadastrar Modelos</button>
                        </a>
                        <a href="view-model.php">
                            <button type="button" class="btn btn-warning btn-xs">Visualizar Modelos</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>