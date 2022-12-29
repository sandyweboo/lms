<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>admin</title>
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
    include("navbar.php");

    ?>
   <?php require "Database.php"; ?>
    <!-- end nav content-->

    <!-- Page content-->
    <div class="container d-flex justify-content-center">
      <div class="col-12 shadow-lg p-3 m-4 d-flex justify-content-end">
        <div class="btn btn-warning rounded-0 " data-bs-toggle="modal" data-bs-target="#exampleModal">Add New subject</div>
      </div>
    </div>

    <div class="modal fade rounded-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add new Subject</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Add Subjet name</label>
              <input type="text" class="form-control rounded-0" id="sub" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
              <div class="btn btn-success rounded-0 " onclick="addsubject();"> add</div>

            </div>

          </div>

        </div>
      </div>
    </div>
    <?php                  
     $rs = Database::search("SELECT * from teacher");
     $n = $rs->num_rows;
   ?>

    <div class="row  p-2 mt-1">
      <div class="col-lg-4 col-md-12 col-sm-12 order-md-2 order-sm-2 order-lg-1  shadow-lg">

        <div class="p-3 m-3 fw-bold  shadow-lg  text-center bg-body " onclick="mteacher();">Manage teacher</div>
        <div class="p-3 m-3 fw-bold  shadow-lg  text-center bg-body">Manage Acadamic officer</div>
        <div class="p-3 m-3 fw-bold  shadow-lg  text-center bg-body">Manage student</div>
      </div>

      <div class="col-lg-8 col-md-12 col-sm-12 order-md-1 order-sm-1 order-lg-2  bg-shadow-lg">

        <div class="col-12">
          <div class="row m-1 p-4 shadow-lg d-flex justify-content-between">
            <div class="col-lg-3 col-md-12 col-sm-12 fw-bold text-center text-dark shadow-lg bg-warning p-3 m-1">total teacher   <?php echo "$n"; ?></div>
            <div class="col-lg-3 col-md-12 col-sm-12 fw-bold text-center text-dark shadow-lg bg-success p-3 m-1">total student</div>
            <div class="col-lg-3 col-md-12 col-sm-12 fw-bold text-center text-dark shadow-lg bg-primary p-3 m-1">total officer</div>
          </div>
        </div>

        <div class="col-12">
          <div class="col-12 shadow-lg">

            <div id="tabs">
              <ul class=" p-2">
                <li class=" shadow-lg rounded-0 border-0 text-light text-center fw-bold"><a href="#tabs-1">teacher</a></li>
                <li class=" shadow-lg rounded-0 border-0 text-light text-center fw-bold"><a href="#tabs-2">subject</a></li>
                <li class=" shadow-lg rounded-0 border-0 text-light text-center fw-bold"><a href="#tabs-3">results</a></li>
              </ul>
            
              <div id="tabs-1">

                <input id="myInput" type="text" class="input-group mb-3 col-4" placeholder="Search..">

                <h3>Teacher</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Teacher name</th>
                      <th>Subject</th>
                      <th>status</th>

                    </tr>
                  </thead>
                  <tbody id="myTable">
                    <tr>
                      <td>John</td>
                      <td>Doe</td>

                      <td>
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        </div>
                      </td>
                    </tr>

                  </tbody>
                </table>

              </div>

              <div id="tabs-2">

                <h3>Subjects</h3>


                <table class="table">
                <tr>
                <th>ID</th>
                <th>Subject Name</th>
      
            </tr>
                  <?php
                
                  $rs = Database::search("SELECT * FROM `subject`");
                  $n = $rs->num_rows;
                  for ($x = 0; $x < $n; $x++) {
                    $d = $rs->fetch_assoc();
                  ?>
                    <td><?php echo $d["id"]; ?></td>
                    <td><?php echo $d["name"]; ?></td>
                    </tr>
                  <?php
                  }
                  ?>
                </table>

              </div>

              <div id="tabs-3">


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/external/jquery/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script>
      $("#tabs").tabs();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>
</body>

</html>