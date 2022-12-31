
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
<?php
include "session.php";

?>
 <div class="main-section">
        <div class="row">

                <div class="d-flex align-items-center justify-content-center vh-100 bg-light">
                    <div class="col-lg-4 col-md-8 col-sm-12 shadow p-4">
                    <div class="logo mb-3"></div>
<h4>please update your profile </h4>
                 <h5  id="email2"> <?php echo $d["email"];?> </h5> 
                    <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">your full name</label>
                              <input type="text" class="form-control rounded-0" id="name">
                            </div>

                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">your Contact number</label>
                              <input type="text" class="form-control rounded-0" id="contact">
                            </div>

                            <div class="mb-3">
            
                      <button type="submit" class="btn btn-primary rounded-0 col-12" onclick="reg();" >Save</button>
                            </div>
                

                    </div>
                </div>
           
        </div>
    </div>





<script src="js/script.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.js"></script>
</body>
</html>

