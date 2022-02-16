$(document).ready(function(){
    
    //Slide Toggle event to animate the filter 
    $("#category-title").click(function(){
        $("#category-options").slideToggle(1000);
    })
    
    $("#brand-title").click(function(){
        $("#brand-options").slideToggle(1000);
    })
    
    $("#price-title").click(function(){
        $("#price-options").slideToggle(1000);
    })
    
})