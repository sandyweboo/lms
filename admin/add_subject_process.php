<?php

require "Database.php";

$sub = $_POST["sub"];

if (empty($sub)) {
    echo ("Please enter subject name");
} else if (strlen($sub) < 2) {
    echo ("subject Name must have more THAN 2 characters!");

}else{

    Database::iud("INSERT INTO `subject` (`subject_name`) VALUES ('".$sub."')");

    echo ("done");

}
    
?>