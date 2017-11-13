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
                        <h4>Cadastrar Novo Administrador</h4>
                    </div>  
                    <div class="base-form col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <form method="post" action="" enctype="application/x-www-form-urlencoded">
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <input type="text" name="name_adm" class="form-control" placeholder="Nome Completo" required autofocus>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <input type="email" name="email_adm" class="form-control" placeholder="E-mail" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <input type="password" name="pass_adm" class="form-control" placeholder="Senha" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <input type="password" name="" class="form-control" placeholder="Confirme a Senha" required>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <button type="submit" class="btn btn-primary" name="btn_adm">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                        <?php
                            if($insert_adm){
                                echo "
                                    <div class='alert alert-success alert-dismissible fade in' role='alert'> 
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>×</span>
                            </button> 
                            <h4>Muito Bem</h4> 
                            <p>O usuário $name_adm foi cadastrado com sucesso.</p> 
                            <p> 
                                <a href='new-user-adm.php'>
                                    <button type='button' class='btn btn-success'>Cadastrar Novo Usuário</button> 
                                </a>
                                <a href='view-user-adm.php'>
                                    <button type='button' class='btn btn-default'>Visualizar Usuários Cadastrados</button> 
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