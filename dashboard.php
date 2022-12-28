<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="icon" href="img/logo.svg" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <title>Dashboard</title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
          aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top" />
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <form class="d-flex" role="search">
              <input class="form-control me-2 rounded-0" type="search" placeholder="Search" aria-label="Search" />
              <button class="rounded-0 btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </ul>
          <div class="btn-group">
            <button type="button" class="btn btn-success rounded-0 dropdown-toggle" data-bs-toggle="dropdown"
              aria-expanded="false">
              More Action
            </button>
            <ul class="dropdown-menu rounded-0">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!--nav end-->

    <div class="row p-2 bg-success mt-2 shadow">
      <div class="col-lg-4 sm-12 md-12 text-light fw-bold text-center">
        Hello sandy
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
      <div class="col-lg-4 sm-12 md-12 text-light fw-bold text-center bg-success">
        <div class="text-center bg-success m-2 p-3 shadow-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
          upload Assigment <i class="bi bi-upload"></i>
        </div>

        <div class="text-center bg-success m-2 p-3 shadow-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
          lecture note <i class="bi bi-journal"></i>
        </div>

        <div class="text-center bg-success m-2 p-3 shadow-lg" onclick="change3();">
          assigment <i class="bi bi-person-workspace"></i>
        </div>
      </div>

      <div class="col-lg-8 sm-12 md-12 text-light fw-bold text-center">
        <!--middle part-->
        <div class="col-12">
          <div class="text-center bg-success m-3 p-3 shadow-lg">
            recent activities
          </div>
        </div>

        <div class="col-12">
          <div class="text-center bg-success m-3 p-3 shadow-lg">
            your score by subject
          </div>

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

        <!--end middlepart-->
      </div>

      <!--upload assigment-->
      <div div class="modal fade rounded-0" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Assigment Upload
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Subject</label>
                <select class="form-select rounded-0" aria-label="Default select example">
                  <option selected>subject</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Assigment No</label>
                <select class="form-select rounded-0" aria-label="Default select example">
                  <option selected>assigment no</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="input-group mb-3 rounded-0">
                <label class="input-group-text" for="inputGroupFile01">Upload Assigment</label>
                <input type="file" class="form-control rounded-0" id="inputGroupFile01" />
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">
                Close
              </button>
              <button type="button" class="btn btn-success rounded-0">
                Save changes
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- end upload assigment-->

      <!--lecture note-->
      <div div class="modal fade rounded-0" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header bg-success rounded-0">
              <h1 class="modal-title fs-5 text-light " id="exampleModalLabel">
                lecture notes <i class="bi bi-journal"></i>
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Select Subject</label>
                <select class="form-select rounded-0" aria-label="Default select example">
                  <option selected>subject</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Letest notes</label>
              </div>

       


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">
                Close
              </button>
              <button type="button" class="btn btn-success rounded-0">
                Save changes
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- end lecture note-->
    </div>
  </div>

  <script src="js/script.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
</body>

</html>