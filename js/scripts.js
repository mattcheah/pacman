//jQuery

$(function() {
   
    
    $(window).scroll(function() {
        var offset = $(this).scrollTop();
        var parallaxHeader = $("#home-jumbotron");
        parallaxHeader.css("backgroundPosition", "0px -"+(offset*.2)+"px");
    });
    
    
});