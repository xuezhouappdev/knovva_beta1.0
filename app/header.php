<?php
// Start the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--    <link rel="icon" href="img/favicon.ico">-->
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <title><?php echo $pageTitle; ?></title>

    <!--bootstrap-->
    <!--bs file is in the scss -->

    <!-- Font Awesome Icons -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Animated -->
    <link rel="stylesheet" href="vendor/animate/animate.min.css">

    <!--fancybox-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />

    <!--sweeralert-->
    <link rel="stylesheet" href="vendor/sweetalert2/dist/sweetalert2.min.css" />

    <!-- Costom CSS This file is converted from scss-->
    <link rel="stylesheet" href="./css/app.css">


    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-103945789-1', 'auto');
        ga('send', 'pageview');

    </script>


</head>

<body>
<!-- Header -->
<nav class="navbar navbar-toggleable-sm navbar-light sticky-top bg-faded" id="mynav">
    <div class="container">
    <!--        <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">-->
    <!--            <i class="fa fa-bars burgericon" aria-hidden="true"></i>-->
    <!--            <span class="icon-burger">&#xe900;</span>-->
    <!---->
    <!--        </button>-->

        <!--hamburger animation version-->
        <button class="hamburger hamburger--elastic navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
        </button>

        <a class="navbar-brand" href="index.php">
        <!--<img src="img/logo-trim.png" width="90" height="30" alt="Knovva Academy">-->
            <p class="animated flipInX"><span >Knovva</span>&nbsp;<span>Academy</span> </p>
        </a>

        <a class="hidden-md-up program-visible" style="cursor: pointer" href="programs.php">
            <i class="fa fa-leanpub programsign" aria-hidden="true" ></i>
        </a>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="showwhencollapse">
                    <a class="nav-link" href="programs.php">programs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://blog.knovva.com/" target="_blank">blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        more
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <!--<a class="dropdown-item" href="index.php#whoweare">about</a>-->
                        <a class="dropdown-item" href="career.php">career</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">contact</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="contact-form-wrapper jumbotron" >
                    <div class="container">

                        <div class="contact-banner"  style="background: url('img/telegraph.jpg') center center no-repeat;background-size: cover; "  >
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <h3 >get in touch</h3>
                                        <!--               <p>we are looking forward to your  </p>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="form-area">

                                    <form role="form"  novalidate id="contact-form"  >
                                        <br style="clear:both">

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="first name" minlength="2" REQUIRED>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="last name" required>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="phone number" >
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" type="textarea" id="message" name="message" placeholder="leave your message here" maxlength="140" rows="4" required></textarea>
                                        </div>

                                        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right contact-submit">submit</button>

                                    </form>


                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--                <button type="button" class="btn btn-primary">Save changes</button>-->
<!--            </div>-->
        </div>
    </div>
</div>


