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
                        <h4>Cadastrar Nova Campanha</h4>
                    </div>  
                    <div class="base-form col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label>Nome da Campanha:</label>
                                    <input type="text" name="title_camp" class="form-control" placeholder="Nome da Campanha" required autofocus>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label>Ano da Campanha</label>
                                    <input type="number" name="year_camp" class="form-control" placeholder="Ano da Campanha" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label>Modelos da Campanha:</label>
                                    <select class="form-control" name="models_camp1">
                                        <option selected>Escolha o(a) Modelo</option>
                                        <?php
                                            if($get_models_campain){
                                            while($list_models = mysqli_fetch_array($get_models_campain)){
                                                echo "
                                                    <option>$list_models[name_model]</option>
                                                ";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="color-label-camp">asdasda</label>
                                    <select class="form-control" name="models_camp2">
                                        <option selected>Escolha o(a) Modelo</option>
                                        <?php
                                            if($get_models_campain2){
                                            while($list_models2 = mysqli_fetch_array($get_models_campain2)){
                                                echo "
                                                    <option>$list_models2[name_model]</option>
                                                ";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="color-label-camp">asdasda</label>
                                    <select class="form-control margin-select-camp" name="models_camp3">
                                        <option selected>Escolha o(a) Modelo</option>
                                        <?php
                                            if($get_models_campain3){
                                            while($list_models3 = mysqli_fetch_array($get_models_campain3)){
                                                echo "
                                                    <option>$list_models3[name_model]</option>
                                                ";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="color-label-camp">asdasda</label>
                                    <select class="form-control margin-select-camp" name="models_camp4">
                                        <option selected>Escolha o(a) Modelo</option>
                                        <?php
                                            if($get_models_campain4){
                                            while($list_models4 = mysqli_fetch_array($get_models_campain4)){
                                                echo "
                                                    <option>$list_models4[name_model]</option>
                                                ";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="color-label-camp">asdasda</label>
                                    <select class="form-control margin-select-camp" name="models_camp5">
                                        <option selected>Escolha o(a) Modelo</option>
                                        <?php
                                            if($get_models_campain5){
                                            while($list_models5 = mysqli_fetch_array($get_models_campain5)){
                                                echo "
                                                    <option>$list_models5[name_model]</option>
                                                ";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="color-label-camp">asdasda</label>
                                    <select class="form-control margin-select-camp" name="models_camp6">
                                        <option selected>Escolha o(a) Modelo</option>
                                        <?php
                                            if($get_models_campain6){
                                            while($list_models6 = mysqli_fetch_array($get_models_campain6)){
                                                echo "
                                                    <option>$list_models6[name_model]</option>
                                                ";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                
                                
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label>Empresa:</label>
                                    <input type="text" name="brand_camp" class="form-control" placeholder="Empresa para qual foi feita a campanha" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label>Site:</label>
                                    <input type="text" name="site_camp" class="form-control" placeholder="Link para site da empresa, ou site da campanha" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-12">
                                    <label>Foto de Destaque</label>
                                    <input type="file" name="coverimg_camp[]">
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label>Fotos:</label>
                                    <label class="text-danger"><strong><small>Atenção: Você pode inserir até 3 fotos por campanha</small></strong></label>
                                    <input type="file" name="img1_camp[]">
                                    <input type="file" name="img2_camp[]">
                                    <input type="file" name="img3_camp[]">
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <button type="submit" class="btn btn-primary" name="btn_camp">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                        <?php
                            if($insert_campain){
                                echo "
                                    <div class='alert alert-success alert-dismissible fade in' role='alert'> 
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>×</span>
                            </button> 
                            <h4>Muito Bem</h4> 
                            <p>Campanha Cadastrada.</p> 
                            <p> 
                                <a href='new-campain.php'>
                                    <button type='button' class='btn btn-success'>Cadastrar Nova Campanha</button> 
                                </a>
                                <a href='view-campain.php'>
                                    <button type='button' class='btn btn-default'>Visualizar Campanhas Cadastradas</button> 
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