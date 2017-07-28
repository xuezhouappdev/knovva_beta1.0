<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hello</title>
</head>


<body>

<?php include 'header.php'?>


<div class="test" STYLE="margin-top: 100px">
    <div class="container">
        <img src="svg/test.svg" id="circle" class="img img-responsive" style="margin: 0 auto;display: block">
    </div>




</div>

<?php include "footer.php";?>


<div class="hello" style="margin-top: 400px">
    <div class="container">
        <div class="row">
            <div class="col-md-4 wow bounceInLeft">
                <img class="img img-responsive" src="http://via.placeholder.com/350x150">
            </div>

            <div class="col-md-4 wow bounceIn" >
                <img class="img img-responsive" src="http://via.placeholder.com/350x150">
            </div>

            <div class="col-md-4 wow bounceIn">
                <img class="img img-responsive" src="http://via.placeholder.com/350x150">
            </div>
        </div>
    </div>
</div>

<script>
    var circle = $("#circle");

    TweenMax.to(circle,3,{
        rotation:"360deg",
        transformOrigin:"center center",
        repeat:-1,
        ease:Linear.easeNone
    },1);

   $(function(){
       new WOW().init();
   });

</script>

</body>
</html>