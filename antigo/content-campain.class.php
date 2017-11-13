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
        $id_campain = $_GET['id_campain'];
    
        if($get_campain){
            $list_campain_info = mysqli_fetch_array($get_campain);
        }
    ?>
</head>
<body>
    <div class="container-fluid" id="casting">
        <div class="row">
            <div class="container-casting col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2><?php echo $list_campain_info[title_camp]; ?></h2>
                <div class="row">
                    <div class="container-all-campain col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="container-cover-campain col-xs-12 col-sm-12 col-md-12 col-lg-5">
                            <div class="row">
                                <img src="<?php echo $list_campain_info[coverimg_camp]; ?>" class="img-responsive cover-campain">
                            </div>
                        </div> 
                        <div class="info-campain col-xs-12 col-sm-12 col-md-12 col-lg-5">
                            <div class="row">
                                <p>
                                    <strong>Modelos:</strong>
                                    <?php
                                    
                                        
                                        $count_camp_model1 = mysqli_num_rows($get_camp_model1);
                                        $count_camp_model2 = mysqli_num_rows($get_camp_model2);
                                        $count_camp_model3 = mysqli_num_rows($get_camp_model3);
                                        $count_camp_model4 = mysqli_num_rows($get_camp_model4);
                                        $count_camp_model5 = mysqli_num_rows($get_camp_model5);
                                        $count_camp_model6 = mysqli_num_rows($get_camp_model6);
                                    
                                        if($count_camp_model1 != 0){
                                         echo "
                                             <a href=''>
                                                <button class='btn btn-danger btn-sm'>
                                                    $list_campain_info[models_camp1]
                                                </button>
                                             </a>
                                         ";
                                        }  
                                    
                                        if($count_camp_model2 != 0){
                                         echo "
                                             <a href=''>
                                                <button class='btn btn-danger btn-sm'>
                                                    $list_campain_info[models_camp2]
                                                </button>
                                             </a>
                                         ";
                                        }  
                                    
                                        if($count_camp_model3 != 0){
                                         echo "
                                             <a href=''>
                                                <button class='btn btn-danger btn-sm'>
                                                    $list_campain_info[models_camp3]
                                                </button>
                                             </a>
                                         ";
                                        }
                                    
                                        if($count_camp_model4 != 0){
                                         echo "
                                             <a href=''>
                                                <button class='btn btn-danger btn-sm'>
                                                    $list_campain_info[models_camp4]
                                                </button>
                                             </a>
                                         ";
                                        }
                                       
                                        if($count_camp_model5 != 0){
                                         echo "
                                             <a href=''>
                                                <button class='btn btn-danger btn-sm'>
                                                    $list_campain_info[models_camp5]
                                                </button>
                                             </a>
                                         ";
                                        }
                                    
                                        if($count_camp_model6 != 0){
                                         echo "
                                             <a href=''>
                                                <button class='btn btn-danger btn-sm'>
                                                    $list_campain_info[models_camp6]
                                                </button>
                                             </a>
                                         ";
                                        }
                                    ?>
                                </p>
                            </div>
                            <div class="row">
                                <p><strong>Empresa: </strong><?php echo $list_campain_info[brand_camp]; ?></p>
                                <p><strong>Site da Campanha: </strong>
                                    <?php echo "
                                        <a href='$list_campain_info[site_camp]' target='_blank'>
                                            $list_campain_info[site_camp]
                                        </a>"; 
                                    ?>
                                </p>
                                <p><strong>Ano: </strong><?php echo $list_campain_info[year_camp]; ?></p>
                            </div>
                            <div class="row container-thumb-models">
                                <?php
                               
                                        $count_thumb_campain1 = mysqli_num_rows($get_thumb_campain1);
                                        $count_thumb_campain2 = mysqli_num_rows($get_thumb_campain2);
                                        $count_thumb_campain3 = mysqli_num_rows($get_thumb_campain3);
                                
                                    if($count_thumb_campain1 != 0){
                                        echo "
                                            <img src='$list_campain_info[img1_camp]' class='img-responsive img-thumbnail size-thumbnail-campain'>
                                        ";
                                    } 
                                
                                    if($count_thumb_campain2 != 0){
                                        echo "
                                            <img src='$list_campain_info[img2_camp]' class='img-responsive img-thumbnail size-thumbnail-campain'>
                                        ";
                                    }
                                
                                    if($count_thumb_campain3 != 0){
                                        echo "
                                            <img src='$list_campain_info[img3_camp]' class='img-responsive img-thumbnail size-thumbnail-campain'>
                                        ";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>  
    </div>
</body>
</html>