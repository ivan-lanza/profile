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
    <div class="container-fluid" id="portifolio">
        <div class="row">
            <div class="container-portifolio col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2>PORTIFOLIO</h2> 
                
                <div class="container-models col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="row">
                        <?php
                            if($get_portifolio){
                                while($list_portifolio = mysqli_fetch_array($get_portifolio)){
                                    echo "
                                        <div class='models col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center'>
                                        <a href='campain.php?id_campain=$list_portifolio[id_camp]'>
                                            <img src='$list_portifolio[coverimg_camp]' class='img-responsive model-portifolio'>
                                            <h5>$list_portifolio[title_camp]</h5>
                                            <h6>$list_portifolio[year_camp]</h6>
                                        </a>    
                                        </div>
                                    ";
                                }
                            }
                        ?>
                        <!--<div class="models col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center">
                            <img src="imgs/model1.jpg" class="img-responsive model-portifolio">
                            <h5>Nome da Campanha</h5>
                            <h6>2000</h6>
                        </div>
                        <div class="models col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center">
                            <img src="imgs/model1.jpg" class="img-responsive model-portifolio">
                            <h5>Nome da Campanha</h5>
                            <h6>2000</h6>
                        </div>
                        <div class="models col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center">
                            <img src="imgs/model1.jpg" class="img-responsive model-portifolio">
                            <h5>Nome da Campanha</h5>
                            <h6>2000</h6>
                        </div> -->
                       
                        <a href="all-campain.php">
                            <button type="button" class="btn btn-default btn-center-portifolio">Veja Mais</button>
                        </a>    
                    </div>
                </div>
            </div>
        </div>  
    </div>
</body>
</html>