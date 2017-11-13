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
    <div class="container-fluid" id="casting">
        <div class="row">
            <div class="container-casting col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2>CASTING</h2>
                <div class="row">
                    <div class="container-casting-form col-xs-10 col-sm-10 col-md-6 col-lg-6">
                        <div class="form-casting-left col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            
                            <?php echo "<form method='get' action='result-casting.php?name=$name_casting&sex=$sex_casting&eye=$eyecolor_casting&age=$minage_casting&birth2_model$maxage_casting=&hair=$haircolor_casting&color=$color_casting'>"; ?>
                                
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label class="white-label">Nome</label>
                                    <input type="text" class="form-control form-style" name="name_model">
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label class="white-label">Sexo</label>
                                    <select class="form-control form-style" name="sex_model">
                                        <option selected>Escolha</option>
                                        <option>Feminino</option>
                                        <option>Masculino</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label class="white-label">Cor dos Olhos</label>
                                    <select class="form-control form-style" name="eyecolor_model">
                                        <option selected>Escolha</option>
                                        <option>Castanho</option>
                                        <option>Verde</option>
                                        <option>Azul</option>
                                        <option>Cinza</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-casting-right col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="white-label">Idade</label>
                                    <input type="number" class="form-control form-style" placeholder="De" name="birth_model">
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="white-label">&nbsp;</label>
                                    <input type="number" class="form-control form-style" placeholder="Até" name="birth2_model">
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label class="white-label">Cor dos Cabelos</label>
                                    <select class="form-control form-style" name="haircolor_model">
                                        <option selected>Escolha</option>
                                        <option>Castanho Claro</option>
                                        <option>Castanho Escuro</option>
                                        <option>Loiro</option>
                                        <option>Preto</option>
                                        <option>Ruivo</option>
                                        <option>Branco</option>
                                        <option>Outro</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label class="white-label">Etnia</label>
                                    <select class="form-control form-style" name="color_model">
                                        <option selected>Escolha</option>
                                        <option>Branco</option>
                                        <option>Negro</option>
                                        <option>Pardo</option>
                                        <option>Amarelo</option>
                                        <option>Vermelho</option>
                                        <option>Indigena</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn-primary btn-left" name="btn_casting" value="true">
                                        Pesquisar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>
        </div>  
    </div>
</body>
</html>