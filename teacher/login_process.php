<?php
session_start();
require "Database.php";


$un = $_POST["un"];
$pwd = $_POST["pwd"];
$chk = $_POST["chk"];

if(empty($un)){
    echo("enter username");
}else if(empty($pwd)){
    echo("enter password");
}else{

    $rs = Database::search("SELECT * FROM `teacher` WHERE `username`='".$un."' AND `pwd`='".$pwd."'");
    $n = $rs->num_rows;
    if($n == 1){
        echo("success");
        $d = $rs->fetch_assoc();
        $_SESSION['userLogin'] = "Loggedin";
        $_SESSION["user"] = $d;
        if($chk == "true"){
            setcookie("username", $un, time() + (60 * 60 * 24 * 365));
            setcookie("pwd", $pwd, time() + (60 * 60 * 24 * 365));
        }else{
            setcookie("username","",-1);
            setcookie("pwd","",-1);
    
    
            
        }
    }
   
}




?>