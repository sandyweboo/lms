<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="img/logo.svg" />

    <title>verify your account</title>
</head>

<body>
<?php
include "session.php";

?>
    <div class="main-section">
        <div class="row">

                <div class="d-flex align-items-center justify-content-center vh-100 bg-light">
                    <div class="col-lg-4 col-md-8 col-sm-12 shadow p-4">
                        <form>
                        <div class="logo mb-3"></div>

                        <h3>vereification code is send your email</h3>
                       
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">verification code</label>
                              <input type="text" class="form-control rounded-0" id="vcode">
                            </div>
                            
                            <button type="submit" class="btn btn-primary rounded-0 col-12" onclick="verifyteacher();">Save</button>
                          </form>
                    </div>
                </div>
           
        </div>
    </div>


        <script src="js/script.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.js"></script>
</body>

</html>