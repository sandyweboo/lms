<?php
   require "Database.php";


   $sub_id = $_POST["subject"];
   $email = $_POST["email"];

   Database::iud("UPDATE `teacher` SET `subject_id`='".$sub_id."' WHERE `email`='".$email."'");

   echo("success");
?>