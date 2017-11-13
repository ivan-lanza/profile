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
    <div class="container-fluid" id="contact">
        <div class="row">
            <div class="container-contact col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2>CONTATO</h2> 
                <div class="container-form-contact col-xs-12 col-sm-12 col-md-4 col-lg-4">
                     <?php
                            if($insert_contact){
                                echo "
                                    <div class='alert alert-success alert-dismissible fade in' role='alert' id='result'> 
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>×</span>
                            </button> 
                            <h4>Mensagem Enviada com Sucesso</h4> 
                            <p><small>$name_contact obrigado por entrar em contato, logo responderemos sua mensagem no email informado acima.</small><br>
                            <strong>
                                <small>Agência Profile</small>
                            </strong>
                            </p> 
                        </div>
                                ";
                            }
                        ?>
                    <form method="post" action="#result">
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Nome Completo" name="name_contact"> 
                        </div>
                        <div class="form-group">
                           <input type="email" class="form-control" placeholder="Email" name="email_contact"> 
                        </div>
                        <div class="form-group">
                           <input type="tel" class="form-control" placeholder="Telefone" name="tel_contact"> 
                        </div>
                        <div class="form-group">
                           <textarea class="form-control" placeholder="Mensagem" name="msg_contact"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info" name="btn_contact">Enviar</button>
                    </form>
                </div>
                
                <div class="gmaps col-xs-12 col-sm-12 col-md-6 col-lg-6 col-lg-offset-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d913.7578095250824!2d-46.5680353!3d-23.6390523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5cccc9cea8f1%3A0x352e53311e3ffacb!2sR.+Francesco+Copine%2C+139+-+Nova+Gerti%2C+S%C3%A3o+Caetano+do+Sul+-+SP!5e0!3m2!1spt-BR!2sbr!4v1466695027407"  frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                
            </div>
        </div>  
    </div>
</body>
</html>