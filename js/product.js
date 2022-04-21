$(document).ready(function(){
  //mouseover and mouseout event for zoom animation
    $(".clothing-grid-item").mouseover(function(){
        $(this).css({transition:"0.3s",transform:"scale(1.1,1.1)"});
        // console.log("mouseover the product");
    })
    $(".clothing-grid-item").mouseout(function(){
        $(this).css({transition:"0.3s",transform:"scale(1)"});
        // console.log("mouseout the product");
    })

})

$(window).on("load",function() {
    $(window).scroll(function() {
      var windowBottom = $(this).scrollTop() + $(this).innerHeight();
      $(".fade").each(function() {
        /* Check the location of each desired element */
        var objectBottom = $(this).offset().top + $(this).outerHeight();
        
        /* If the element is completely within bounds of the window, fade it in */
        if (objectBottom < windowBottom) { //object comes into view (scrolling down)
          if ($(this).css("opacity")==0) {$(this).fadeTo(300,1);}
        } else { //object goes out of view (scrolling up)
        //   if ($(this).css("opacity")==1) {$(this).fadeTo(1000,0);}
        }
      });
    }).scroll(); //invoke scroll-handler on page-load
  });