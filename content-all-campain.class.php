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
                <h2>Campanhas</h2>
                <div class="row">
                    <div class="container-all-campain col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <?php
                            if($get_all_campain){
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
                            }
                        ?>
                        </div>
                        
                    </div>
                </div>    
            </div>
        </div>  
    </div>
</body>
</html>