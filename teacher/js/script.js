
function login(){


    var un = document.getElementById("un");
    var pwd = document.getElementById("pwd");
    var chk = document.getElementById("check");
    
// alert(role.value);
// alert(email.value);
// alert(pwd.value);
// alert(chk.checked);
var f = new FormData();

  
    f.append("un",un.value);
    f.append("pwd",pwd.value);
    f.append("chk",chk.checked);
 
    var rq = new XMLHttpRequest();
    rq.onreadystatechange = function(){
     if(rq.readyState == 4){
         var t = rq.responseText;
         if(t == "success"){
             window.location="techer-dashboard.php";
         }else{
            alert(t);
            // window.location="dashboard.php";
         }
     }
    }
 rq.open("POST", "login_process.php",true);
 rq.send(f);
 }

  
 function logout(){
    var r = new XMLHttpRequest();
    r.onreadystatechange = function(){
        if(r.readyState == 4){
            var t = r.responseText;
            if(t == "success"){
                window.location.reload();
            }else{
                alert(t);
            }
        }
    }

    r.open("GET", "logout.php", true);
    r.send();
}

function reg(){
    
   var name = document.getElementById("name");
   var contact = document.getElementById("contact");

//    alert (name.value);
//    alert (contact.value);

   var f = new FormData();

   f.append("name",name.value);
   f.append("contact",contact.value);

 
   var rq = new XMLHttpRequest();
   rq.onreadystatechange = function(){
    if(rq.readyState == 4){
        var t = rq.responseText;
        if(t == "ok"){
            alert("something wrong ☹");      
        }else{
            alert("please check your mail box 😊");   
           window.location = "verification.php";  
        }
    }
   }
rq.open("POST", "teacher_register_process.php",true);
rq.send(f);

}

function verifyteacher() {
    var vc = document.getElementById("vcode");
    // alert (vcode.value); 
    var f = new FormData();
    f.append("vc",vcode.value);
  
    var rq = new XMLHttpRequest();
    rq.onreadystatechange = function(){
     if(rq.readyState == 4){
         var t = rq.responseText;
         if(t == "ok"){
            alert ("Hey !! everything is now Done; 😊😊.please Login again and get refresh 😉😎")
            window.location = "index.php";     
         }else{
            alert(t);
            // window.location = "dashboard.php";  
         }
     }
    }
 rq.open("POST","verfication_process.php", true);
 rq.send(f);
}