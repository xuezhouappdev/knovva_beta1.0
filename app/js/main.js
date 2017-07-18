/**
 * Index page  *********************************************************************************
 */

    $("#scroll-cta").on('click', function(event) {
        if(this.hash !=="") {
            event.preventDefault();

            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 40
            }, 1000, function(){
                // Add hash (#) to URL when done scrolling (default click behavior)
                //window.location.hash = hash;
            });
        } //end if
    });




    //scroll to control the navigation
    $(window).scroll(function(){
        if($(document).scrollTop() > 20) {

            $('#mynav').addClass("background");
        }
        else {
            $('#mynav').removeClass("background");
        }

    });

/**
 * career page  *********************************************************************************
 */

   $('.department .container .row .col-md-4').click(function () {
      window.location.href="/knovva_beta1.0/app/career.php#";
   });
