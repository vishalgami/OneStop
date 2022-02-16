$(document).ready(function(){
    "use strict";
   
    //Signin form validation 
    $("#signinBtn").click(function(){
        const mail = $("#email").val();
        const pwd = $("#password").val();
     
                      
    
        if(mail==""){
            $("#email").prev().text("Email/Mobile number is required"); 
        }
        else if(pwd==""){
            $("#email").prev().text("");
            $("#password").prev().text("Password is required"); 
        }
        else if(pwd.length<8){
            $("#email").prev().text("");
            $("#password").prev().text("password should contain at least 8 characters"); 
        }
        else{
            $("#signinForm").submit();
            alert("SignIn done successfully!");
        }
    });
});