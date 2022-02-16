$(document).ready(function(){
  //mouseover and mouseout event for zoom animation
    $(".clothing-grid-item").mouseover(function(){
        $(this).css({transition:"0.3s",transform:"scale(1.1,1.1)"});
        console.log("mouseover the product");
    })
    $(".clothing-grid-item").mouseout(function(){
        $(this).css({transition:"0.3s",transform:"scale(1)"});
        console.log("mouseout the product");
    })
})