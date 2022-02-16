$(document).ready(function(){
    "use strict";
   
    //Contact form validation 
    $("#contactBtn").click(function(){
        const name = $("#name").val();
        const mail = $("#email").val();
        const mob = $("#mobile").val();
        const msg = $("#message").val();
                      
        if(name==""){
            $("#name").prev().text("Name is required"); 
        }
        else if(mail==""){
            $("#name").prev().text("");
            $("#email").prev().text("Email is required"); 
        }
        else if(mob==""){
            $("#name").prev().text("");
            $("#email").prev().text("");
            $("#mobile").prev().text("Mobile number is required"); 
        }
        else if(msg==""){
            $("#name").prev().text("");
            $("#email").prev().text("");
            $("#mobile").prev().text("");
            $("#message").prev().text("Message is required"); 
        }
        else{
            $("#contactForm").submit();
            alert("Contact form submitted successfully!");
        }
    });
});