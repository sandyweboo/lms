
function login(){

    var role = document.getElementById("role");
    var un = document.getElementById("un");
    var pwd = document.getElementById("pwd");
    var chk = document.getElementById("check");
    
// alert(role.value);
// alert(email.value);
// alert(pwd.value);
// alert(chk.checked);
var f = new FormData();

    f.append("role",role.value);
    f.append("un",un.value);
    f.append("pwd",pwd.value);
    f.append("chk",chk.checked);
 
    var rq = new XMLHttpRequest();
    rq.onreadystatechange = function(){
     if(rq.readyState == 4){
         var t = rq.responseText;
         if(t == "success"){
             window.location="verification.php";
         }else{
            alert(t);
            // window.location="dashboard.php";
         }
     }
    }
 rq.open("POST", "login_process.php",true);
 rq.send(f);
 }


