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
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/jquery-ui.css">

</head>

<body>

    <div class="container">

        <?php
include "navbar.php";

?>



        <!-- end nav content-->
        <div class="container d-flex justify-content-center">
            <div class="col-12 shadow-lg p-3 m-4 d-flex justify-content-end">
                <div class="btn btn-warning rounded-0 " data-bs-toggle="modal" data-bs-target="#exampleModal">invite
                    techer</div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade rounded-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Send invite </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form>

                            <div class="mb-3">

                                <label for="exampleInputEmail1" class="form-label">username</label>
                                <input type="text" class="form-control rounded-0" id="un" aria-describedby="emailHelp">

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">password</label>
                                <input type="password" class="form-control rounded-0" id="pwd"
                                    aria-describedby="emailHelp">

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control rounded-0" id="email"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary rounded-0" onclick="sendmail();">send mail</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 shadow-lg">

            <div id="tabs">
                <ul class=" p-2">
                    <li class=" shadow-lg rounded-0 border-0 text-light text-center fw-bold"><a
                            href="#tabs-1">Assigments</a></li>
                    <li class=" shadow-lg rounded-0 border-0 text-light text-center fw-bold"><a href="#tabs-2">Lecture
                            notes</a></li>
                    <li class=" shadow-lg rounded-0 border-0 text-light text-center fw-bold"><a
                            href="#tabs-3">results</a></li>
                </ul>
                <div id="tabs-1">

                    <input id="myInput" type="text" class="input-group mb-3 col-4" placeholder="Search..">

                    <h3>list of teacher</h3>

                    <table class="table">
                <tr>
              
      
            </tr>
            
                </table>
                    <table class="table">
                        <thead>
                            <tr>
                            
                            <th>Teacher Name</th>
                            <th>email</th>
                            <th>subject</th>
                            <th>assing to subject</th>

                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <tr>
                            <?php
                  require "Database.php";

                  $rs = Database::search("SELECT `teacher`.*, subject.name FROM teacher INNER JOIN `subject`  ON teacher.subject_id = subject.subject_id;");
                  $n = $rs->num_rows;
                  for ($x = 0; $x < $n; $x++) {
                    $d = $rs->fetch_assoc();
                  ?>
                    
                    <td><?php echo $d["username"]; ?></td>
                    <td><?php echo $d["email"]; ?></td>
                    <td><?php echo $d["name"]; ?></td>
                    <td id="email2" value="<?php echo $d["email"]; ?>" onclick="updateteacher();">Update</td>
                
                    </tr>
                  <?php
                  }
                  ?>
                            </tr>


                        </tbody>
                    </table>

                </div>

                <div id="tabs-2">


                </div>

                <div id="tabs-3">


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
    <script>
        
        $("#tabs").tabs();

        // $(document).ready(function(){
        //     $(document).on('click','td[data-role=updateteacher]',function(){
        //         // alert($(this).data('id')); 
        //     })
        // })

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>

</html>