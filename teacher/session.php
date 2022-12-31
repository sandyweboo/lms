<?php
   session_start();
   if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == ''){
       header("Location:index.php");
       die();
   }
   
   ?> 
<?php


if(isset($_SESSION["user"])){
  $d = $_SESSION["user"];

  ?>
<?php 
} 

?>