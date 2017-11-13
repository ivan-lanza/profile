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
        // GET RESULT CASTING
    $name_casting = $_GET['name_model'];
    $sex_casting = $_GET['sex_model'];
    $eyecolor_casting = $_GET['eyecolor_model'];
    $minage_casting = $_GET['birth_model'];
    $maxage_casting = $_GET['birth_model'];
    $haircolor_casting = $_GET['haircolor_model'];
    $color_casting = $_GET['color_model'];
    $action = $_GET['btn_casting'];

   if($action == 'true'){
       $get_result_casting = mysqli_query($link, "SELECT * FROM `model` WHERE `name_model` = '$name_casting' AND `sex_model` = '$sex_casting' AND `eyecolor_model` = '$eyecolor_casting' AND `haircolor_model` = '$haircolor_casting' AND `color_model` = '$color_casting' AND `birth_model` BETWEEN '$minage_casting' and '$maxage_casting'");
    } 
    ?>
</head>
<body>
    <div class="container-fluid" id="casting">
        <div class="row">
            <div class="container-casting col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2>Resultado da Busca</h2>
                <div class="row">
                    <div class="container-all-campain col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <?php

                            if($get_result_casting){
                                $list_result_casting = mysqli_fetch_array($get_result_casting);
                            }
                            
                            echo "<h1>$list_result_casting[name_model]</h1>";
                            echo "<h1>$list_result_casting[sex_model]</h1>";
                            echo "<h1>$list_result_casting[eyecolor_model]</h1>";
                            echo "<h1>$list_result_casting[birth_model]</h1>";
                            echo "<h1>$list_result_casting[haircolor_model]</h1>";
                            echo "<h1>$list_result_casting[color_model]</h1>";
                            
                                
                            /*if($get_all_campain){
                                while($list_all_campain = mysqli_fetch_array($get_all_campain)){
                                    echo "
                                        <div class='models col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center'>
                                        <a href='campain.php?id_campain=$list_all_campain[id_camp]'>
                                            <img src='$list_all_campain[coverimg_camp]' class='img-responsive model-portifolio'>
                                            <h5 class='txt-campain'>$list_all_campain[title_camp]</h5>
                                            <h6 class='txt-campain'>$list_all_campain[year_camp]</h6>
                                        </a>    
                                        </div>
                                    ";
                                }
                            }*/
                        ?>
                        </div>
                        
                    </div>
                </div>    
            </div>
        </div>  
    </div>
</body>
</html>