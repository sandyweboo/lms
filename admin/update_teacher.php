<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>manage_teacher</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/jquery-ui.css">

</head>

<body>

    <div class="container">

        <?php
        include "navbar.php";
        require "Database.php";
        

$data_id = $_GET["c"];


$rs = Database::search("SELECT `teacher`.*, subject.subject_name 
FROM teacher 
INNER JOIN `subject`  
ON teacher.subject_id = subject.subject_id 
WHERE `email` = '".$data_id."' ;");

$n = $rs->num_rows;
if($n == 1){
    $d = $rs->fetch_assoc();
    ?>

<div class="container d-flex justify-content-center">

<div class="row col-lg-12 col-sm-12  col-md-12 shadow-lg">
    <div class="col-lg-12 col-sm-12  col-md-12 mt-4">
        <h3 class="m-3">Teacher Stats</h3>
        <div class="col-12">
            <hr>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold">teacher name</label>
            <div class="row d-flex justify-content-between">
                <div class="col-lg-8 col-md-12 col-sm-12">
                <input type="email" disabled class="form-control rounded-0"  value="<?php echo $d["name"]; ?>" >
                </div>
           
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold">teacher email</label>
            <div class="row d-flex justify-content-between">
                <div class="col-lg-8 col-md-12 col-sm-12">
             
                    <input type="email" disabled class="form-control rounded-0" id="email" value="<?php echo $d["email"]; ?>">
                </div>
 
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold">contact number</label>
            <div class="row d-flex justify-content-between">
                <div class="col-lg-8 col-md-12 col-sm-12">
                <input type="email" disabled class="form-control rounded-0"  value="<?php echo $d["contact"]; ?>" >
                </div>
       
            </div>
        </div>

        <div class="col-lg-12 col-sm-12  col-md-12 mt-4">
            <h3 class="m-3">Add Subject</h3>
            <div class="col-12">
                <hr>
            </div>


            <div class="row col-lg-12 col-sm-12  col-md-12 shadow-sm">

            <div class="col-lg-8 col-md-12 col-sm-12 mt-3">
            <input type="email" disabled class="form-control rounded-0"  value="<?php echo $d["subject_name"]; ?>" >
                   
                <div class="col-lg-4 col-md-12 col-sm-12">
                
                <div class="col-12 mt-3 mb-3">
                                <label class="form-labe fw-bold ">Add Or Update subject</label>
                                <select class="form-control" id="subject">

                                    <?php
                                   
                                    $rs = Database::search("SELECT * FROM `subject`");
                                    $n = $rs->num_rows;
                                    for ($x = 0; $x < $n; $x++) {
                                        $d = $rs->fetch_assoc();
                                    ?> 
                                        <option value="<?php echo $d["subject_id"]; ?>"><?php echo $d["subject_name"]; ?></option>
                                    <?php

                                    }

                                    ?>

                                </select>
                            </div>


                </div>
                </div>

            </div>
                       
            


            <div class="mt-3 p-2 btn  btn-primary rounded-0 col-lg-4 col-sm-12  col-md-12" onclick="update_teacher();">save & update</div>
        </div>

    </div>
</div>
</div>
</div>
</div>



<?php
}else{
    echo("something went wrong");

} 
 
?>





      


    <script src="js/script.js"></script>
    
    
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/external/jquery/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</body>

</html>