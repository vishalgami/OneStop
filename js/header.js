$(document).ready(function() {
    //mouseenter and mouseleave event to animate the header links 
    $(".header-link").mouseenter(function() {
        $(this).css({
            transition: "ease-in 0.2s",
            borderBottom: "thick solid #1e3799"
        });
    });
    $(".header-link").mouseleave(function() {
        $(this).css({ transition: "0.2s", border: "none" });
    });
});