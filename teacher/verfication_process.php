<?php
session_start();
require "Database.php";


$vcode = $_POST["vc"];

if(empty($vcode)){
    echo("verification code");
}else{

    $rs = Database::search("SELECT * FROM `teacher` WHERE `vcode`='".$vcode."'");
    $n = $rs->num_rows;
    $d = $rs->fetch_assoc();
    

    if($n == 1){
        echo ("ok");
    }else{
        echo ("verification code wrong");
    }
    

}



?>