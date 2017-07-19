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


    //feature animation section

    var arrow = $("#arrow");

    TweenMax.from(arrow,1.5,
        {
            x:-50,
            alpha:0,
            repeat: -1,
            scale:0.8,
            repeatDelay:1


        });

    TweenMax.to(arrow,1.5,
    {
        x: 30,
        alpha:1,
        repeat: -1,
        scale:1.2,
        repeatDelay:1


    });



var moon = $("#4moon");
    var heart=$("#4heart");

   TweenMax.from(moon,1.5,
    {
        opacity:0

    });


 TweenMax.to(moon,2,
        {
         background:"#fff",
              scale:1.3,
             repeat: -1,
               yoyo:true,
            repeatDelay:1
        });

   TweenMax.from(heart,3,{
       opacity: 0,
         delay: 1.3,
             y: -40,
        repeat: -1,
          yoyo:true,
       ease: Bounce.easeOut,
       repeatDelay:1
   });


    TweenMax.to(heart,1,{
        scale:1.5,
        y: -500
    });

    var earth = $("#earth");
    var bluecicle = $("#thickblue");
    var cycle = $("#cycle");


    var tl = new TimelineMax({repeat:-1});

    tl.to(earth,3, {
       scale:1.7
    }).to(earth,1,{
            opacity:0
        }).to(cycle,5,{
            css: {
                transformOrigin:"50% 50%",
                rotation:"360deg",
                repeat: -1,
                repeatDelay:1,
                scale:1.2,
                ease: Linear.easeNone
            }
    },"-=2").to(bluecicle,3,{
        scale:2.2
    },"-=3").to(cycle,0.5, {
        opacity:0
    });





/**
 * career page  *********************************************************************************
 */

   $('.department .container .row .col-md-4').click(function () {
      window.location.href="/app/career.php#";
   });
