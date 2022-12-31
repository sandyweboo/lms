//navbar 
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
//navbar

function login(){
    var e2 = document.getElementById("e2");
    var p2 = document.getElementById("p2");
    var cm = document.getElementById("cm");
 
 //    alert(e2.value);
 //    alert(p2.value);
 //    alert(cm.checked);
 
 var f = new FormData();
    f.append("e2",e2.value);
    f.append("p2",p2.value);
    f.append("cm",cm.checked);
 
    var rq = new XMLHttpRequest();
    rq.onreadystatechange = function(){
     if(rq.readyState == 4){
         var t = rq.responseText;
         if(t == "success"){
             alert(t);
         }else{
            window.location="dashboard.php";
         }
     }
    }
 rq.open("POST", "loginprocess.php",true);
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

 function mteacher(){
    window.location="manage_teacher.php";

    }
  
    function addsubject(){

        var sub= document.getElementById("sub");

        var f = new FormData();

        f.append("sub",sub.value);

        var r = new XMLHttpRequest();
        r.onreadystatechange = function(){
            if(r.readyState == 4){
                var t = r.responseText;
                if(t = "done"){
                    alert("subject add success");
                }else{
                    alert(t);
                }
            }
        }
        r.open("POST", "add_subject_process.php", true);
        r.send(f);
        // alert(sub.value);
    }



     function sendmail(){

        var un = document.getElementById("un");
        var pwd = document.getElementById("pwd");
        var email = document.getElementById("email");

        var f = new FormData();
        f.append("un",un.value);
        f.append("pwd",pwd.value);
        f.append("email",email.value);


        var r = new XMLHttpRequest();
        r.onreadystatechange = function(){
            if(r.readyState == 4){
                var t = r.responseText;
                if(t == "success"){
                    location.reload();
                }else{
                    alert(t);
                }
            }
        }
        r.open("POST", "send_invite.php", true);
        r.send(f);
    }