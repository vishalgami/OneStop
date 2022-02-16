$(document).ready(function(){
    "use strict";
   
    //Signup form validation 
    $("#signupBtn").click(function(){
        const usrName = $("#username").val();
        const mail = $("#email").val();
        const pwd = $("#password").val();
        const mob = $("#mobile").val();
        const dateOfbirth = $("#dob").val();
                      
        if(usrName==""){
            $("#username").prev().text("Username is required");  
        }
        else if(mail==""){
            $("#username").prev().text("");
            $("#email").prev().text("Email is required"); 
        }
        else if(pwd==""){
            $("#username").prev().text("");
            $("#email").prev().text("");
            $("#password").prev().text("Password is required"); 
        }
        else if(pwd.length<8){
            $("#password").prev().text("password should contain at least 8 characters"); 
        }
        else if(mob==""){
            $("#username").prev().text("");
            $("#email").prev().text("");
            $("#password").prev().text("");
            $("#mobile").prev().text("Mobile Number is required"); 
        }
        else if(dateOfbirth==""){
            $("#username").prev().text("");
            $("#email").prev().text("");
            $("#password").prev().text("");
            $("#mobile").prev().text("");
            $("#dob").prev().text("DOB is required"); 
        }
        else{
            $("#username").prev().text("");
            $("#email").prev().text("");
            $("#password").prev().text("");
            $("#mobile").prev().text("");
            $("#dob").prev().text("");
            $("#signupForm").submit(); 
            alert("SignUp completed successfully!");
        }
    });
});


