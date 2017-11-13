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
            <div class="container-slider col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <?php
                        if($get_slider){
                            $list_slider = mysqli_fetch_array($get_slider);
                            echo "
                                <img src='$list_slider[img_slider]' class='img-responsive'>  
                            ";
                        }
                    ?>
                </div>    
            </div>
        </div>  
    </div>
</body>
</html>