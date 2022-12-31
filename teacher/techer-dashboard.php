<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="icon" href="img/logo.svg" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <title>Dashboard</title>
</head>

<body>

  <div class="container">
    <?php
include "navbar.php";

include "session.php";
// include "test.php";

$g = $d["name"]; 
$c = $d["contact"]; 

if (empty($g) or empty($c)) {
    header("Location: register.php");
}else{
  // header("Refresh:0");
}

?>

    <div class="row p-2 bg-primary mt-2 shadow">
      <div class="col-lg-4 sm-12 md-12 text-light fw-bold text-center">
        <?php echo $d["username"]; ?>
      </div>
      <div class="col-lg-4 sm-12 md-12 text-light fw-bold text-center">
        Grade 07
      </div>
      <div class="col-lg-4 sm-12 md-12 text-light fw-bold text-center">
        your Student iD
      </div>
    </div>

    <!-- Button trigger modal -->

    <div class="row">
      <div class="col-lg-4 sm-12 md-12 text-light fw-bold text-center bg-primary">
        <div class="text-center bg-primary m-2 p-3 shadow-lg">
          upload Assigment <i class="bi bi-upload"></i>
        </div>

        <div class="text-center bg-primary m-2 p-3 shadow-lg">
          lecture note <i class="bi bi-journal"></i>
        </div>

        <div class="text-center bg-primary m-2 p-3 shadow-lg">
          assigment <i class="bi bi-person-workspace"></i>
        </div>
      </div>

      <div class="col-lg-8 sm-12 md-12 text-light fw-bold text-center">
        <!--middle part-->
        <div class="col-12">
          <div class="text-center bg-primary m-3 p-3 shadow-lg">
            recent activities
          </div>
          <h2 class="demoHeaders">Tabs</h2>
          <div id="tabs">
            <ul>
              <li><a href="#tabs-1">Assigments</a></li>
              <li><a href="#tabs-2">Lecture notes</a></li>
              <li><a href="#tabs-3">results</a></li>
            </ul>
            <div id="tabs-1">

              <div class="row rounded-0 bg-success m-auto p-2 d-flex justify-content-center align-content-center">


                <div class="col-6 rounded-0 text-light">
                  <h2>Your Assigment</h2>
                </div>
                <div class="col-6 rounded-0">
                  <div class="btn btn-warning rounded-0"> upload assigment</div>
                </div>
              </div>
              <div class="col-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">subject</th>
                      <th scope="col">assigment no</th>
                      <th scope="col">subject id</th>
                      <th scope="col">download</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
            <div id="tabs-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare,
              felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.</div>
            <div id="tabs-3">

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <div class="col-12">
          <div class="text-center bg-primary m-3 p-3 shadow-lg">
            your score by subject
          </div>


          <!--end middlepart-->
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
</body>

</html>