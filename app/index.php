<?php
$pageTitle="Home | Knovva Academy";
include 'header.php';
require_once('program.php');


?>

<!-- TOP Slide -->
<section class="slider">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <!-- indicator -->
            <ol class="carousel-indicators" style="z-index: 999">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>

            <!--Slider -->
            <div class="carousel-inner index_landing_slider" role="listbox">

                <!--First Slider -->
                    <div class="carousel-item active slider-g20">
                            <div class="container">

                        <div class="text-wrapper animated fadeInUp">
                            <div class="row justify-content-end ">

                                <div class="col-sm-12 ">

<!--                                    <h1 >-->
<!--                                        Model G20 program.-->
<!--                                    </h1>-->
<!--                                    <a class="btn btn-cta">i'm interested</a>-->
                                </div>
                            </div>
                        </div>

                    </div>

                   </div>

                <!--Second Slider -->
                <div class="carousel-item slider-si" >
                    <div class="container">
                        <div class="text-wrapper animated fadeInRight">
                            <div class="row justify-content-end ">
                            </div>
                        </div>
                    </div>
                </div>



                <!--Third Slider -->
                <div class="carousel-item slider-rd">
                    <div class="container">
                        <div class="text-wrapper animated fadeInRight">
                            <div class="row justify-content-end ">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!--control-->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!--scroll for more-->
        <!--        <div class="scrollformore">-->
        <!--            <p>scroll for more</p>-->
        <!--            <a href="#whoweare" id="scroll-cta"><i class="fa fa-angle-down animated infinite fadeInUp" aria-hidden="true"></i></a>-->
        <!---->
        <!--        </div>-->
    </div>
</section>


<!-- about slider--WHO WE ARE-->
<section class="about" id="whoweare">
    <div class="container">
         <!--about slider-->
        <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="container">
                        <div class="row justify-content-around">

                            <div class="col-lg-6">
                                <h4 >who are we</h4>
                                <p class="animated flipInX">Knovva Academy is a team of passionate educators from around the world who believe that a great education doesn’t end in the classroom. We value curiosity and diversity and are united by our shared love of learning, so we came together to help students of all backgrounds experience and discuss fresh global perspectives.&nbsp;&nbsp;<a href="about.php">Read more ></a>
                                </p>

                            </div>

                            <div class="col-lg-5 " >
                                <a data-fancybox href="https://www.youtube.com/watch?v=-kA7V5W7k2M&t=2s">
                                    <div  class="videodiv">
                                        <img onmouseover="this.src='img/600p.gif'"
                                             onmouseout="this.src='img/gif-static.gif'" class="playgif img img-responsive"  data-swap="img/600p.gif" src="img/gif-static.gif" style="width: 100%;height: 100%;cursor: pointer">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

<!--                <div class="carousel-item">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-start">-->
<!--                            <div class="col-md-6">-->
<!--                                <h4  >what we do</h4>-->
<!--                                <p class="animated flipInX">Catering to students from around the world, Knovva Academy utilizes a mix of online and in-person courses (blend learning) for teens in order to challenge their expectations about education; we strive to provoke our students to ask, think, and learn content largely untouched in their public school system. We draw on experiential and project-based learning practices to engage students in politics, engineering, computer science, literature, and more. All of these subjects can help students uncover their own passions, and their own directions. </p>-->
<!---->
<!--                            </div>-->
<!---->
<!---->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="carousel-item">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-start">-->
<!--                            <div class="col-md-6">-->
<!--                                <h4  >What We Value</h4>-->
<!--                                <p class="animated flipInX">We maintain deep-seated relationships with our students and parents, both during and throughout our programs. We utilize in-person informational sessions, phone calls, digital media, and webinars to build a peer community of students and parents. Our dynamic team of native Mandarin, Spanish, and English speakers allows easy communication, and clarity of cultural expectations. Knovva Academy continues to receive high praise from parents who have felt the deep involvement of their children’s participation in our advanced learning programs.-->
<!--                                </p>-->
<!---->
<!--                            </div>-->
<!---->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->


            </div>

            <!--CONTROLLER-->
<!--            <div class="controller">-->
<!--                <a class="animated fadeInLeft infinite" href="#carouselExampleControls3" role="button" data-slide="prev">-->
<!--                    <i class="fa fa-caret-left " aria-hidden="true"></i>-->
<!--                    <span class="sr-only">Previous</span>-->
<!--                </a>    &nbsp; &nbsp;-->
<!---->
<!--                <a class="animated fadeInRight infinite" href="#carouselExampleControls3" role="button" data-slide="next">-->
<!--                    <i class="fa fa-caret-right " aria-hidden="true"></i>-->
<!--                    <span class="sr-only">Next</span>-->
<!--                </a>-->
<!--            </div>-->
        </div>
    </div>
</section>



<!--Feature programs-->
<section class="feature-programs  jumbotron ">
    <div class="container">
        <h4>Meet Our Programs</h4>
        <div class="row justify-content-center">
            <div class="col-lg-4">

                <div class="card wow slideInLeft">
                    <a href="g20.php">
                        <img src= '<?php echo $program_g20->get_program_imgURL();?>' class="card-img img">
                    </a>
                    <div class="text-wrapper">
                        <h5><?php echo $program_g20->get_program_title(); ?></h5>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<?php echo $program_g20->get_program_date(); ?>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?php echo $program_g20->get_program_location(); ?>&nbsp;&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo $program_g20->get_program_duration(); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <a href="social-innovation-leadership.php">
                        <img src='<?php echo $program_si->get_program_imgURL();?>' class="card-img img">
                    </a>
                    <div class="text-wrapper">
                        <h5><?php echo $program_si->get_program_title(); ?></h5>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<?php echo $program_si->get_program_date(); ?>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?php echo $program_si->get_program_location(); ?>&nbsp;&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo $program_si->get_program_duration(); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card wow slideInRight">
                    <a href="reading-literature.php">
                    <img src='<?php echo $program_redicorn->get_program_imgURL();?>' class="card-img img">
                    </a>
                    <div class="text-wrapper">
                        <h5><?php echo $program_redicorn->get_program_title(); ?></h5>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<?php echo $program_redicorn->get_program_date(); ?>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?php echo $program_redicorn->get_program_location(); ?>&nbsp;&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo $program_redicorn->get_program_duration(); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
<!--            <a class="btn" href="programs.php">Explore the Programs</a>-->
        </div>
    </div>
</section>


<!-- our features -->
<section class="features">

    <div class="container">
        <h4>Our Benefits</h4>
        <div class="row justify-content-center">
            <div class="col-md-4 animation-item">
                <div class="animation-container">
                    <div class="animation-inner-wrapper" >
<!--                        <img class="img img-responsive"  src="svg2/circle.svg" style="position:relative;" >-->
<!--                        <img class="img img-responsive" id="thinblue" src="svg2/bluecircle.svg" style="" >-->
<!--                        <img class="img img-responsive" id="arrow" src="svg2/white-arrow.svg" style="">-->
                        <img class="img img-responsive" src="img/touchscreen.svg" style="position:relative;">
<!--                        <i class="fa fa-comments-o icon" aria-hidden="true"></i>-->
                    </div>
                </div>

                <h3>Interactive Courses</h3>
                <hr/>
                <p>Pursue what you love and choose from a variety of fun and engaging courses or blended learning experiences.
                </p>
            </div>


            <div class="col-md-4  animation-item">
                <div class="animation-container">
                    <div class="animation-inner-wrapper" >
<!--                        <img class="img img-responsive" id="earth" src="svg2/earth.svg" style="position:relative;" >-->
<!--                        <img class="img img-responsive" id="thickblue" src="svg2/bluethickcircle.svg" style="" >-->
<!--                        <img class="img img-responsive" id="cycle" src="svg2/Icons-05.svg"  >-->
                        <img class="img img-responsive"  src="img/earth.svg" style="position:relative;" >
<!--                        <i class="fa fa-globe icon" aria-hidden="true"></i>-->
                    </div>
                </div>

                <h3>International Student Base</h3>
                <hr/>
                <p>You will be able to meet many students coming from all over the world, including many parts of North America, South America, and Asia.</p>
            </div>

            <div class="col-md-4   animation-item">
                <div class="animation-container">
                    <div class="animation-inner-wrapper" >
<!--                        <img class="img img-responsive" id="moon" src="svg2/moon.svg" style="position:relative;" >-->
<!--                        <img class="img img-responsive" id="heart"  src="svg2/heart.svg" style="">-->
                        <img class="img img-responsive"  src="img/heart.svg" style="position:relative;" >
                    </div>
                </div>

                <h3>Student Care</h3>
                <hr/>
                <p>We ensure a safe space for your ideas and always provide attentive assistance with students and parents, before, throughout, and after our programs.</p>
            </div>


        </div>
    </div>
</section>




<!-- our blog insight-->
<section class="blog jumbotron">
    <div class="container">
        <h4>Our Insights</h4>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="http://blog.knovva.com/why-college" target="_blank" >
                    <div class="card">
                        <div class="card-body">
                            <h5>College: To Go or Not to Go</h5>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img img-responsive img-rounded" src="img/blog1.png" width="100%">
                                </div>
                                <div class="col-sm-8">
                                    <h6>Category: College </h6>
                                    <h6> September 27, 2017 </h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-4">
                <a href="http://blog.knovva.com/whatnaturaldisastersmeanforeducation" target="_blank" >
                    <div class="card">
                        <div class="card-body">
                            <h5>What Natural Disasters Mean for Education: Can Technology Mend the Cracks</h5>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img img-responsive img-rounded" src="img/blog2.png" width="100%">
                                </div>
                                <div class="col-sm-8">
                                    <h6>Category: Education </h6>
                                    <h6> October 12, 2017 </h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>

            </div>

            <div class="col-md-4">
                <a href="http://blog.knovva.com/forming-global-citizens" target="_blank" >
                    <div class="card">
                        <div class="card-body">
                            <h5>What Does it Mean to be a Global Citizen and Why Should Teachers Care?</h5>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img img-responsive img-rounded" src="img/blog3.png" width="100%">
                                </div>
                                <div class="col-sm-8">
                                    <h6>Category: Global Citizenship </h6>
                                    <h6> September 8, 2017 </h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>

            </div>
        </div>
        <h5><a href="http://blog.knovva.com">Read more on our blog</a></h5>
    </div>

</section>



<!---latest news-->
<div class="gallery-section ">
    <div class="container-fluid">
<!--        <h4>Recent News</h4>-->
        <div id="lightgallery" class="row justify-content-center">


              <div class="col-md-3" href="img/gallery/gallery1.png">
                  <a >
                  <img src="img/gallery/gallery1.png" class="img img-responsive" width="100%" height="auto"  >
                  </a>
              </div>


            <div class="col-md-3" href="img/gallery/gallery2.png">
                <a >
                    <img src="img/gallery/gallery2.png" class="img img-responsive" width="100%" height="auto"  >
                </a>
            </div>

            <div class="col-md-3" href="img/gallery/gallery3.png">
                <a >
                    <img src="img/gallery/gallery3.png" class="img img-responsive" width="100%" height="auto"  >
                </a>
            </div>

            <div class="col-md-3" href="img/gallery/gallery4.png">
                <a >
                    <img src="img/gallery/gallery4.png" class="img img-responsive" width="100%" height="auto"  >
                </a>
            </div>




        </div>



    </div>
</div>


<!--our partner-->
<div class="ourpartner section-partner ">
    <div class="container">
        <h3>Our Partners</h3>

        <div class="row justify-content-center">


            <div class="col-md-2">
                <a href="https://www.gse.harvard.edu/"  target="_blank">
                    <img class="img img-responsive" src="img/partner/partner-hse.png" >
                </a>
            </div>


            <div class="col-md-2">
                <a href="http://chinaeducationsymposium.org/" target="_blank">
                    <img class="img img-responsive" src="img/partner/partner-ces.png" >
                </a>

            </div>




            <div class="col-md-2">
                <a href="https://cambridge.nuvustudio.com/"  target="_blank">
                    <img class="img img-responsive" src="img/partner/partner-nunv.png" >
                </a>
            </div>





            <div class="col-md-2">
                <a href="https://www.facebook.com/huceic/"  target="_blank">
                    <img class="img img-responsive" src="img/partner/partner-hueic.png" >
                </a>
            </div>

            <div class="col-md-2">
                <a href="https://www.rolalang.com/"  target="_blank">
                    <img class="img img-responsive" src="img/partner/partner-rola.png" >
                </a>
            </div>



            <div class="col-md-2">
                <a href="https://www.giantbugfoundation.com/" target="_blank" >
                    <img class="img img-responsive" src="img/partner/partner-gbe.png"  >
                </a>
            </div>




        </div>
    </div>
</div>






<!-- testimonial -->
<section class="testimonial">

    <div class="container-fluid">
<!--        <h4>Testimonial</h4>-->


        <!--Quotes slider -->
        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>

                                <div class="text-wrapper">
                                    <p>“Seeing how much I liked this program, I predict other Knovva Academy programs would be just as good or even better.”<br/></p>
                                </div>

                                <div class="author-wrapper">
                                    <h6>participant from  </h6>
                                    <p> Boston Latin School</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>

                                <div class="text-wrapper">
                                    <p>"They made learning fun and exciting! Knovva Academy showed something different, a different style of discovering new concepts." </p>
                                </div>

                                <div class="author-wrapper">
                                    <h6>participant from </h6>
                                    <p> Fenway High School</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>

                                <div class="text-wrapper">
                                    <p>“ I had an awesome experience and got the chance to improve myself. I will take any opportunities to enrich my life with Knovva Academy. ”</p>
                                </div>

                                <div class="author-wrapper">
                                    <h6>participant from </h6>
                                    <p> Liuzhou High School</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!--CONTROLLER-->
            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>  <!--Quotes slider ends -->


    </div>
</section>





<?php
include 'footer.php';

?>



<script>
    lightGallery(document.getElementById('lightgallery'));
</script>



