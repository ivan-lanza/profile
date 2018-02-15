<?php

include('connect.class.php');

    // PAGE ADM
        // COUNT USERS
    $get_adm = mysqli_query($link, "SELECT * FROM adm");
    if($get_adm){
        $count_adm = mysqli_num_rows($get_adm);
    }
        // COUNT MSG
    $get_msg = mysqli_query($link, "SELECT * FROM contact");
    if($get_msg){
        $count_msg = mysqli_num_rows($get_msg);
    }
        // COUNT SLIDERS
    $get_slider = mysqli_query($link, "SELECT * FROM slider");
    if($get_slider){
        $count_slider = mysqli_num_rows($get_slider);
    }
        // COUNT ABOUT
    $get_about = mysqli_query($link, "SELECT * FROM about");
    if($get_about){
        $count_about = mysqli_num_rows($get_about);
    }

    // COUNT CAMPAIN
    $get_campain = mysqli_query($link, "SELECT * FROM campain");
    if($get_campain){
        $count_campain = mysqli_num_rows($get_campain);
    }

    // COUNT CAMPAIN
    $get_model = mysqli_query($link, "SELECT * FROM model");
    if($get_model){
        $count_model = mysqli_num_rows($get_model);
    }
    
    // PAGE NEW ADM
    $name_adm = $_POST['name_adm'];
    $email_adm = $_POST['email_adm'];
    $pass_adm = $_POST['pass_adm'];
    $btn_adm = $_POST['btn_adm'];
    
    if(isset($btn_adm)){
        $insert_adm = mysqli_query($link, "INSERT INTO adm(name_adm,email_adm,pass_adm)VALUES('$name_adm','$email_adm','$pass_adm')");
    } 

    // PAGE VIEW ADM   
    $get_view_adm = mysqli_query($link, "SELECT * FROM adm ORDER BY id_adm DESC");
    
    // PAGE DELETE ADM
    $id_adm = $_GET['id_adm'];
    $get_del_adm = mysqli_query($link, "SELECT * FROM adm WHERE id_adm = $id_adm");

    $btn_del_adm = $_POST['btn_del_adm'];
    if(isset($btn_del_adm)){
        $delete_adm = mysqli_query($link, "DELETE FROM adm WHERE id_adm = $id_adm");
    }    

    //PAGE VIEW MSG
    $get_view_msg = mysqli_query($link, "SELECT * FROM contact ORDER BY id_contact DESC");

    // PAGE DELETE MSG
    $id_msg = $_GET['id_msg'];
    $get_del_msg = mysqli_query($link, "SELECT * FROM contact WHERE id_contact = $id_msg");

    $btn_del_msg = $_POST['btn_del_msg'];
    if(isset($btn_del_msg)){
        $delete_msg = mysqli_query($link, "DELETE FROM contact WHERE id_contact = $id_msg");
    }    

    // PAGE CONTACT
    $name_contact = $_POST['name_contact'];
    $email_contact = $_POST['email_contact'];
    $tel_contact = $_POST['tel_contact'];
    $msg_contact = $_POST['msg_contact'];
    $btn_contact = $_POST['btn_contact'];

    if(isset($btn_contact)){
        $insert_contact = mysqli_query($link, "INSERT INTO contact(name_contact,email_contact,tel_contact,msg_contact)VALUES('$name_contact','$email_contact','$tel_contact','$msg_contact')");
    }

    // PAGE NEW SLIDER
    $link_slider = $_POST['link_slider'];
    $btn_slider = $_POST['btn_slider'];
    
    // UPLOAD DE IMG SLIDER
    $img_slider = $_FILES['img_slider']['name'];
    $temporario_slider = $_FILES['img_slider']['tmp_name'];
    $diretorio_slider = "slider/".$img_slider;
    move_uploaded_file($temporario_slider, $diretorio_slider); 

    if(isset($btn_slider)){
        $insert_slider = mysqli_query($link, "INSERT INTO slider(link_slider,img_slider)VALUES('$link_slider','$diretorio_slider')");
    }

    // PAGE NEW ABOUT
    $name_about = $_POST['name_about'];
    $function_about = $_POST['function_about'];
    $txt_about = $_POST['txt_about'];
    $btn_about = $_POST['btn_about'];

     // UPLOAD DE IMG
        $img_about = $_FILES['img_about']['name'];
        $temporario_about = $_FILES['img_about']['tmp_name'];
        $diretorio_about = "about/".$img_about;
        move_uploaded_file($temporario_about, $diretorio_about);  

    if(isset($btn_about)){
        $insert_about = mysqli_query($link, "INSERT INTO about(txt_about,name_about,function_about,img_about)VALUES('$txt_about','$name_about','$function_about','$diretorio_about')");
    }

    // PAGE NEW CAMPAIN
    $title_camp = $_POST['title_camp'];
    $year_camp = $_POST['year_camp'];
    $models_camp1 = $_POST['models_camp1'];
    $models_camp2 = $_POST['models_camp2'];
    $models_camp3 = $_POST['models_camp3'];
    $models_camp4 = $_POST['models_camp4'];
    $models_camp5 = $_POST['models_camp5'];
    $models_camp6 = $_POST['models_camp6'];
    $brand_camp = $_POST['brand_camp'];
    $site_camp = $_POST['site_camp'];
    $btn_camp = $_POST['btn_camp'];

    if(isset($btn_camp)){
        $errors= array();
        
        foreach($_FILES['coverimg_camp']['tmp_name'] as $key1 => $tmp_name1 ){
		$file_name1 = $key.$_FILES['coverimg_camp']['name'][$key1];
		$file_size1 =$_FILES['coverimg_camp']['size'][$key1];
		$file_tmp1 =$_FILES['coverimg_camp']['tmp_name'][$key1];	
        
        $desired_dir1="img_campain";
        $dir1 = "$desired_dir1/".$file_name1;
            if(is_dir("$desired_dir1/".$file_name1)==false){
                    move_uploaded_file($file_tmp1,$dir1);
            } // IF 1
        } // FOR EACH 1
        
        foreach($_FILES['img1_camp']['tmp_name'] as $key2 => $tmp_name2 ){
		$file_name2 = $key.$_FILES['img1_camp']['name'][$key2];
		$file_size2 =$_FILES['img1_camp']['size'][$key2];
		$file_tmp2 =$_FILES['img1_camp']['tmp_name'][$key2];	
        
        $desired_dir2="img_campain";
        $dir2 = "$desired_dir2/".$file_name2;
            if(is_dir("$desired_dir2/".$file_name2)==false){
                    move_uploaded_file($file_tmp2,$dir2);
            } // IF 2
        } // FOR EACH 2
        
        foreach($_FILES['img2_camp']['tmp_name'] as $key3 => $tmp_name3 ){
		$file_name3 = $key.$_FILES['img2_camp']['name'][$key3];
		$file_size3 =$_FILES['img2_camp']['size'][$key3];
		$file_tmp3 =$_FILES['img2_camp']['tmp_name'][$key3];	
        
        $desired_dir3="img_campain";
        $dir3 = "$desired_dir3/".$file_name3;
            if(is_dir("$desired_dir3/".$file_name3)==false){
                    move_uploaded_file($file_tmp3,$dir3);
            } // IF 3
        } // FOR EACH 3
        
        foreach($_FILES['img3_camp']['tmp_name'] as $key4 => $tmp_name4 ){
		$file_name4 = $key.$_FILES['img3_camp']['name'][$key4];
		$file_size4 =$_FILES['img3_camp']['size'][$key4];
		$file_tmp4 =$_FILES['img3_camp']['tmp_name'][$key4];	
        
        $desired_dir4="img_campain";
        $dir4 = "$desired_dir4/".$file_name4;
            if(is_dir("$desired_dir4/".$file_name4)==false){
                    move_uploaded_file($file_tmp4,$dir4);
            } // IF 4
        } // FOR EACH 4  
        
        $insert_campain = mysqli_query($link, "INSERT INTO campain(title_camp,year_camp,models_camp1,models_camp2,models_camp3,models_camp4,models_camp5,models_camp6,brand_camp,site_camp,coverimg_camp,img1_camp,img2_camp,img3_camp)VALUES('$title_camp','$year_camp','$models_camp1','$models_camp2','$models_camp3','$models_camp4','$models_camp5','$models_camp6','$brand_camp','$site_camp','$dir1','$dir2','$dir3','$dir4')");
    }

    // PAGE VIEW CAMPAIN
    $get_view_campain = mysqli_query($link, "SELECT * FROM campain");
    $get_models_campain = mysqli_query($link, "SELECT * FROM model ORDER BY name_model ASC");
    $get_models_campain2 = mysqli_query($link, "SELECT * FROM model ORDER BY name_model ASC");
    $get_models_campain3 = mysqli_query($link, "SELECT * FROM model ORDER BY name_model ASC");
    $get_models_campain4 = mysqli_query($link, "SELECT * FROM model ORDER BY name_model ASC");
    $get_models_campain5 = mysqli_query($link, "SELECT * FROM model ORDER BY name_model ASC");
    $get_models_campain6 = mysqli_query($link, "SELECT * FROM model ORDER BY name_model ASC");
    
    // PAGE DELETE CAMPAIN
    $id_campain = $_GET['id_campain'];
    $get_del_campain = mysqli_query($link, "SELECT * FROM campain WHERE id_camp = $id_campain");
    
    $btn_del_campain = $_POST['btn_del_camp'];
    if(isset($btn_del_campain)){
        $delete_campain = mysqli_query($link, "DELETE FROM campain WHERE id_camp = $id_campain");
    }

    // PAGE NEW MODEL

    $name_model = $_POST['name_model'];
    $birth_model = $_POST['birth_model'];  
    $sex_model = $_POST['sex_model'];
    $haircolor_model = $_POST['haircolor_model'];
    $eyecolor_model = $_POST['eyecolor_model'];
    $color_model = $_POST['color_model'];
    $btn_model = $_POST['btn_model'];

    if(isset($btn_model)){
        $errors= array();
        
        foreach($_FILES['profileimg_model']['tmp_name'] as $key1 => $tmp_name1 ){
		$file_name1 = $key.$_FILES['profileimg_model']['name'][$key1];
		$file_size1 =$_FILES['profileimg_model']['size'][$key1];
		$file_tmp1 =$_FILES['profileimg_model']['tmp_name'][$key1];	
        
        $desired_dir1="img_models";
        $dir1 = "$desired_dir1/".$file_name1;
            if(is_dir("$desired_dir1/".$file_name1)==false){
                    move_uploaded_file($file_tmp1,$dir1);
            } // IF 1
        } // FOR EACH 1
        
        foreach($_FILES['img1_model']['tmp_name'] as $key2 => $tmp_name2 ){
		$file_name2 = $key.$_FILES['img1_model']['name'][$key2];
		$file_size2 =$_FILES['img1_model']['size'][$key2];
		$file_tmp2 =$_FILES['img1_model']['tmp_name'][$key2];	
        
        $desired_dir2="img_models";
        $dir2 = "$desired_dir2/".$file_name2;
            if(is_dir("$desired_dir2/".$file_name2)==false){
                    move_uploaded_file($file_tmp2,$dir2);
            } // IF 2
        } // FOR EACH 2
        
        foreach($_FILES['img2_model']['tmp_name'] as $key3 => $tmp_name3 ){
		$file_name3 = $key.$_FILES['img2_model']['name'][$key3];
		$file_size3 =$_FILES['img2_model']['size'][$key3];
		$file_tmp3 =$_FILES['img2_model']['tmp_name'][$key3];	
        
        $desired_dir3="img_models";
        $dir3 = "$desired_dir3/".$file_name3;
            if(is_dir("$desired_dir3/".$file_name3)==false){
                    move_uploaded_file($file_tmp3,$dir3);
            } // IF 3
        } // FOR EACH 3
        
        foreach($_FILES['img3_model']['tmp_name'] as $key4 => $tmp_name4 ){
		$file_name4 = $key.$_FILES['img3_model']['name'][$key4];
		$file_size4 =$_FILES['img3_model']['size'][$key4];
		$file_tmp4 =$_FILES['img3_model']['tmp_name'][$key4];	
        
        $desired_dir4="img_models";
        $dir4 = "$desired_dir4/".$file_name4;
            if(is_dir("$desired_dir4/".$file_name4)==false){
                    move_uploaded_file($file_tmp4,$dir4);
            } // IF 4
        } // FOR EACH 4
        
        $insert_model = mysqli_query($link, "INSERT INTO model(name_model,birth_model,sex_model,haircolor_model,eyecolor_model,color_model,profileimg_model,img1_model,img2_model,img3_model)VALUES('$name_model','$birth_model','$sex_model','$haircolor_model','$eyecolor_model','$color_model','$dir1','$dir2','$dir3','$dir4')");
    }

    // PAGE VIEW MODEL
    $get_view_model = mysqli_query($link, "SELECT * FROM model");

    // PAGE DELETE MODEL
    $id_model = $_GET['id_model'];
    $get_del_model = mysqli_query($link, "SELECT * FROM model WHERE id_model = '$id_model'");
    
    
    $btn_del_model = $_POST['btn_del_model'];
    if(isset($btn_del_model)){
        $delete_model = mysqli_query($link, "DELETE FROM model WHERE id_model = $id_model");
    }

    // GET SLIDER
    $get_slider = mysqli_query($link, "SELECT * FROM slider ORDER BY id_slider DESC");
    
    // GET ABOUT
    $get_about = mysqli_query($link, "SELECT * FROM about ORDER BY id_about DESC");
    
    // GET PORTIFOLIO
    $get_portifolio = mysqli_query($link, "SELECT * FROM campain ORDER BY id_camp DESC LIMIT 3");

    // GET ALL CAMPAIN
    $get_all_campain = mysqli_query($link, "SELECT * FROM campain ORDER BY id_camp DESC");

    // GET CAMPAIN
    $id_campain = $_GET['id_campain'];
    $get_campain = mysqli_query($link, "SELECT * FROM campain WHERE id_camp = '$id_campain'");

    // GET NAME MODELS CAMPAIN
    $get_camp_model1 = mysqli_query($link, "SELECT * FROM campain WHERE id_camp = $id_campain AND models_camp1 != 'Escolha o(a) Modelo'");
    $get_camp_model2 = mysqli_query($link, "SELECT * FROM campain WHERE id_camp = $id_campain AND models_camp2 != 'Escolha o(a) Modelo'");
    $get_camp_model3 = mysqli_query($link, "SELECT * FROM campain WHERE id_camp = $id_campain AND models_camp3 != 'Escolha o(a) Modelo'");
    $get_camp_model4 = mysqli_query($link, "SELECT * FROM campain WHERE id_camp = $id_campain AND models_camp4 != 'Escolha o(a) Modelo'");
    $get_camp_model5 = mysqli_query($link, "SELECT * FROM campain WHERE id_camp = $id_campain AND models_camp5 != 'Escolha o(a) Modelo'");
    $get_camp_model6 = mysqli_query($link, "SELECT * FROM campain WHERE id_camp = $id_campain AND models_camp6 != 'Escolha o(a) Modelo'");

    // GET PHOTOS MODELS CAMPAIN
     $get_thumb_campain1 = mysqli_query($link, "SELECT * FROM campain WHERE id_camp = $id_campain AND img1_camp != 'img_campain/'");
     $get_thumb_campain2 = mysqli_query($link, "SELECT * FROM campain WHERE id_camp = $id_campain AND img2_camp != 'img_campain/'");
     $get_thumb_campain3 = mysqli_query($link, "SELECT * FROM campain WHERE id_camp = $id_campain AND img3_camp != 'img_campain/'");

    
?>