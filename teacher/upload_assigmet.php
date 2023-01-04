<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <title>upload assignment</title>
</head>

<body>
  <?php
  include "session.php";
  $e = $d["email"];

  ?>
  <?php
  require "Database.php";
  $rs = Database::search("SELECT subject.subject_name,subject.subject_id,teacher.name
                                   FROM subject
                                   RIGHT JOIN `teacher`
                                   ON subject.subject_id = teacher.subject_id
                                   where teacher.email = '" . $e . "'");
  $n = $rs->num_rows;
  $ds = $rs->fetch_assoc();

  ?>

  <div class="main-section">
    <div class="row">

      <div class="d-flex align-items-center justify-content-center vh-100 bg-light">
        <div class="col-lg-4 col-md-8 col-sm-12 shadow p-4">

          <h4>Upload Assigment</h4>

          <form action="uap.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label rounded-0">Subject</label>
              <select class="form-select" name="subject" aria-label="Default select example">
                <option selected value="<?php echo $ds["subject_id"]; ?>"><?php echo $ds["subject_name"]; ?></option>
              </select>
            </div>


            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Grade</label>
              <select class="form-select rounded-0" name="grade">
                <?php

                $rs = Database::search("SELECT*FROM `grade`");
                $n = $rs->num_rows;

                for ($x = 0; $x < $n; $x++) {
                  $d = $rs->fetch_assoc();

                ?>
                  <option value="<?php echo $d["id"]; ?>"><?php echo $d["grade"] ?></option>
                <?php

                }

                ?>
              </select>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Assignment Topic</label>
              <input type="text" class="form-control rounded-0" name="topic">
            </div>


            <div class="input-group">
              <input type="file" class="form-control rounded-0" name="my_file" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            </div>

            <div class="mt-3">

              <button type="submit" class="btn btn-primary rounded-0 col-12" name="submit">Save</button>
            </div>


        </div>

        </form>
      </div>

    </div>
  </div>





  <script src="js/script.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>