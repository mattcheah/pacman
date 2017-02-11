//jQuery

$(function() {
    
    $(window).scroll(function() {
        var offset = $(this).scrollTop();
        var parallaxHeader = $("#home-jumbotron");
        var parallaxHeaderOverlay = $("#jumbotron-overlay");
        parallaxHeader.css("backgroundPosition", "0px "+(offset*.3)+"px");
        parallaxHeaderOverlay.css({
            background: "linear-gradient(to right,  rgba(255,255,255,1) 0%,rgba(255,255,255,0.9) "+(52-(offset*.2))+"%,rgba(255,255,255,0) "+(100-(offset*.15))+"%)"
        });
        
        
    });
    
    var allowSignup = true;
    
    $("#home-signup-container button").click(function() {
        
        if (allowSignup) { //Don't submit this twice.

            var email = $("#home-signup-container input").val();
            $.ajax({
                type: 'POST',
                url: '/pacman/back-end/email-signup.php',
                data: {email: email}
            })
            .done(function(data) {
                allowSignup = false;
                $("#email-signup-messages").html(data);
            })
            .fail(function(data) {
                console.log(data);
                $("#email-signup-messages").html(data.responseText);
            });    

        } 
        
    });
});