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
    <div class="container-fluid" id="about">
        <div class="row">
            <div class="container-about col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <?php
                        if($get_about){
                            $list_about = mysqli_fetch_array($get_about);
                            echo "
                                <div class='container-model-about col-xs-12 col-sm-12 col-md-6 col-lg-2'>
                                    <img src='$list_about[img_about]' class='img-responsive model-about img-circle'>
                                    <h4>$list_about[name_about]</h4>
                                    <h6>$list_about[function_about]</h6>
                                </div>
                                <div class='container-info-about col-xs-12 col-sm-12 col-md-6 col-lg-6'>
                                    <h2>QUEM SOMOS</h2>

                                    <div class='col-xs-12 col-sm-12 col-md-6 col-lg-10'>
                                        <p>
                                            $list_about[txt_about]
                                        </p>
                                    </div>
                                </div>   
                            ";
                        }
                    ?>
                    <!-- <div class="container-model-about col-xs-12 col-sm-12 col-md-6 col-lg-2">
                        <img src="imgs/model-about.jpg" class="img-responsive model-about img-circle">
                        <h4>Nome Completo</h4>
                        <h6>Presidente</h6>
                    </div>
                    <div class="container-info-about col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h2>QUEM SOMOS</h2>
                        
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-10">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                    </div> -->
                </div>    
            </div>
        </div>  
    </div>
</body>
</html>