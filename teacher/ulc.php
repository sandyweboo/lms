<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <title>update your details</title>
</head>

<body>
  

  <div class="main-section">
    <div class="row">
      <div class="d-flex align-items-center justify-content-center vh-100 bg-light">
        <div class="col-lg-4 col-md-8 col-sm-12 shadow p-4">

<?php

require "Database.php";
require "session.php";

if(isset($_SESSION["user"])){


    $subject = $_POST["subject"];
    $grade= $_POST["grade"];
    $topic = $_POST["topic"];
    $file = $_FILES['my_file'];
    
    if(empty($topic)){
        echo("enter sbject topic");
    }else if(empty($file)){
    echo("upload file");
}else{

    if(isset($_POST['submit']) && ($_FILES['my_file'])){
    
        //     echo ("<pre>");
        // print_r($_FILES['my_file']);
        //     echo ("</pre>");
        
            $file_name = $_FILES['my_file']['name'];
            $file_size = $_FILES['my_file']['size'];
            $file_error = $_FILES['my_file']['error'];
            $file_tmp = $_FILES['my_file']['tmp_name'];
        
            if ($file_error === 0){
                    if($file_size > 1000000){
                        echo "file Shoud be under 10 Mb";
                        
                    }else{
                        $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
                        $file_ex_lc = strtolower($file_ex);
        
                        $allow_ex = array("pdf", "docs","xlsx" );
        
                        if(in_array($file_ex_lc,$allow_ex )){
                            $new_file_name = uniqid("file-" ,true).'.'.$file_ex_lc;
                            $file_upload_path = 'uploads/lecture_note/'.$new_file_name;
                            move_uploaded_file($file_tmp, $file_upload_path);
        
                            Database::iud("INSERT INTO `lecture_note`(`path`,`topic`,`subject`,`grade`) 
                            VALUES ('".$file_upload_path."','".$topic."','".$subject."','".$grade."')");
                          
                          echo("success");
                            // echo($file_upload_path);
                            header( "refresh:1;url=upload_lc.php");
        
                        }else{
                            echo "this type file cant upload";
                        }
                    }
            }else{
                $em = "unknown error occurd";
                header( "refresh:1;url=upload_lc.php?error=$em");
        
        
            }
        
        
        }else{
            header( "refresh:1;url=upload_lc.php");
        }
    }
    }else{
        echo "please login frist";
    }


   
?>

      </div>
      </div>
    </div>
  </div>


  <script src="js/script.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>