<?php
   
    $link = mysqli_connect("mysql.hostinger.com.br","u998634814_prof","agenciaprofile");
    if($link){
        mysqli_select_db($link, "u998634814_prof");
    }else{
        echo "Erro ao se conectar com o banco de dados";
    }
?>