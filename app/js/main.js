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




//feature animation section////////////////////////////////////////////////////////////////////////////////
//First Animation ////////////////////////////////////////////////////////////////////////////////

    var arrow = $("#arrow");
    var thincircle = $("#thinblue");

    TweenMax.from(arrow,1.5,
        {             x:-50,
                  alpha:0,
                 repeat: -1,
                  scale:1,
            repeatDelay:1
        });

    TweenMax.to(arrow,1.5,
    {
                    x: 6,
                    alpha:1,
                    repeat: -1,
                    scale:1,
                    repeatDelay:1

    });

    TweenMax.from(thincircle,2 ,{
        alpha:0,
        yoyo:true

    });

    TweenMax.to(thincircle,2 ,{
        alpha:1,
        repeat:-1,
        yoyo:true
    });


//Second Animation ////////////////////////////////////////////////////////////////////////////////
    var earth = $("#earth");
    var thickblue = $("#thickblue");
    var cycle = $("#cycle");


    var tl = new TimelineMax({repeat:-1});

    tl.from(earth,0.5,{
        scale:0.9,
        opacity:0
    }).to(earth,2, {
       scale:1
    }).to(earth,1,{
            opacity:0
        }).from(thickblue,2,{
            alpha:0
    }).to(thickblue,2,{
        alpha:1,
        scale:1.1
    },"-=3.9").from(cycle,0.5,{
        css: {
            opacity:0,
            scale:0.9,
            ease:Linear.easeNone,
            y:6,
            x:2
        }

    },"-=1.5").to(cycle,4.5,{
        css: {
            opacity:1,
            rotation:"180deg",
            transformOrigin:"50% 50%",
            repeat:-1,
            scale:0.9,
            ease:Linear.easeNone,
            y:6,
            x:2
        }

    });



//Third Animation ////////////////////////////////////////////////////////////////////////////////

var moon = $("#moon");
var heart=$("#heart");

TweenMax.from(moon,1.5,
    {
        opacity:0,
        scale:0.8

    });


TweenMax.to(moon,2,
    {
        background:"#fff",
        scale:1.1,
        repeat: -1,
        yoyo:true,
        repeatDelay:1
    });



TweenMax.from(heart,3,{
    opacity: 0,
    scale:0.4,
    delay: 1.3,
    y: -40,
    repeat: -1,
    yoyo:true,
    ease: Back.easeOut,
    repeatDelay:1
});


TweenMax.to(heart,1,{
    scale:0.9,
    y: -500
});



//the js to control the href for slider
var landing_images= $(".slider .carousel-item");

landing_images.eq(0).click(function(){
    window.location.href="http://www.google.com";

});

landing_images.eq(1).click(function(){
    window.location.href="http://www.knovva.com";

});


//the js to control the gif
var imageSwap = function () {
    var $this = $(this);
    var newSource = $this.data('swap');
    $this.data('swap', $this.attr('src'));
    $this.attr('src', newSource);
};

$(function () {
    $('img.playgif').hover(imageSwap, imageSwap);
});




/**
 * career page  *********************************************************************************
 */

   $('.department .container .row .col-md-4').click(function () {
      window.location.href="/app/career.php#";
   });
