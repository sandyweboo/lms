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
        ?>



        <!-- end nav content-->
        <div class="container d-flex justify-content-center">

            <div class="row col-10 shadow-lg">
                <div class="col-12 mt-4">
                    <h3 class="m-3">Teacher Stats</h3>
                    <div class="col-12">
                        <hr>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">teacher name</label>
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                name :
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                :
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">teacher email</label>
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                email :
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                :
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">contact number</label>
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                Phone NO :
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                :
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <h3 class="m-3">add Subjects by grade</h3>
                        <div class="col-12">
                            <hr>
                        </div>


                        <div class="row col-12 shadow-sm">

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="mb-3">
                       



                                </div>
                            </div>

                        </div>
                                   
                        


                        <div class="m-3 p-2 btn  btn-primary rounded-0 col-4" onclick="update_teacher();">save & update</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>




    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/external/jquery/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</body>

</html>