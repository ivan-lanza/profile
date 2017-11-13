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
                        <h4>Cadastrar Modelos</h4>
                        
                    </div>  
                    <div class="base-form col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <input type="text" name="name_model" class="form-control" placeholder="Nome Completo" required autofocus>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <input type="number" name="birth_model" class="form-control" placeholder="Idade" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <select name="sex_model" class="form-control">
                                        <option selected>Escolha o Sexo</option>
                                        <option>Masculino</option>
                                        <option>Feminino</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <select name="haircolor_model" class="form-control">
                                        <option selected>Cor dos Cabelos</option>
                                        <option>Castanho Claro</option>
                                        <option>Castanho Escuro</option>
                                        <option>Loiro</option>
                                        <option>Preto</option>
                                        <option>Ruivo</option>
                                        <option>Branco</option>
                                        <option>Outro</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <select name="eyecolor_model" class="form-control">
                                        <option selected>Cor dos Olhos</option>
                                        <option>Castanho</option>
                                        <option>Verde</option>
                                        <option>Azul</option>
                                        <option>Cinza</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <select name="color_model" class="form-control">
                                        <option selected>Etnia</option>
                                        <option>Branco</option>
                                        <option>Negro</option>
                                        <option>Pardo</option>
                                        <option>Amarelo</option>
                                        <option>Vermelho</option>
                                        <option>Indigena</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label><h3>Fotos</h3></label><br>
                                    <label>Foto Principal</label>
                                    
                                    <input type="file" name="profileimg_model[]">
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label>Outras Fotos</label>
                                    <label class="text-danger"><small>Você pode adicionar mais 3(três) fotos</small></label>
                                    
                                    <input type="file" name="img1_model[]">
                                    <input type="file" name="img2_model[]">
                                    <input type="file" name="img3_model[]">
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <button type="submit" class="btn btn-primary" name="btn_model">Cadastrar Modelo</button>
                                </div>
                            </form>
                        </div>
                        <?php
                            if($insert_model){
                                echo "
                                    <div class='alert alert-success alert-dismissible fade in' role='alert'> 
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>×</span>
                            </button> 
                            <h4>Muito Bem</h4> 
                            <p>Modelo $name_model foi cadastrada.</p> 
                            <p> 
                                <a href='new-model.php'>
                                    <button type='button' class='btn btn-success'>Cadastrar Novo Modelo</button> 
                                </a>
                                <a href='view-model.php'>
                                    <button type='button' class='btn btn-default'>Visualizar Modelos Cadastrados</button> 
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