<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Admin Login</title>
</head>

<body class="main-body" >

<div class="">
    <div class="container-fluid vh-100 d-flex  col-lg-8 col-md-12 col-sm-12  justify-content-center">
        <div class="row col-lg-6 col-md-12 col-sm-12 align-content-center">
            

            <div class="box" id="login">
                <div class="container-fluid">
                    <h2>Login Here</h2>


                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="e2" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Enter your Email here</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="p2">
                    </div>


                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="cm">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>

                    <div class="row">

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <button type="button" class=" col-12 btn btn-primary d-grid" onclick="login();" >Login here</button>
                        </div>

            

                    </div>
                </div>
                
            </div>

        </div>
    </div>






    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
   
    

    </div>
</body>

</html>