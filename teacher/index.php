<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="img/logo.svg" />

    <title>Home</title>
</head>

<body>

    <div class="main-section">
        <div class="row">

                <div class="d-flex align-items-center justify-content-center vh-100 bg-light">
                    <div class="col-lg-4 col-md-8 col-sm-12 shadow p-4">
                        <form>
      <div class="logo mb-3"></div>

                            

                                              <?php

                                                $un = "";
                                                $pwd = "";

                                                if (isset($_COOKIE["username"])) {
                                                    $un = $_COOKIE["username"];
                                                }

                                                if (isset($_COOKIE["pwd"])) {
                                                    $pwd = $_COOKIE["pwd"];
                                                }

                                                ?>


                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Username</label>
                              <input type="text" class="form-control rounded-0" id="un" aria-describedby="emailHelp">
                              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control rounded-0" id="pwd">
                            </div>
                            <div class="mb-3 form-check">
                              
                              <input type="checkbox" class="form-check-input" id="check">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary rounded-0 col-12" onclick="login();" >Submit</button>
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