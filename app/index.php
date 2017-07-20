<?php
include 'header.php';
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

                    <div class="carousel-item active" style="background: url('img/index-g20.jpg') top center no-repeat;
                                                         background-size: cover; height:90vh";>
                            <div class="container">

                        <div class="text-wrapper animated fadeInUp">
                            <div class="row justify-content-end ">

                                <div class="col-sm-12 ">

                                    <h1 >
                                        Model G20 Program.
                                    </h1>
<!--                                    <a class="btn btn-cta">i'm interested</a>-->
                                </div>
                            </div>
                        </div>

                    </div>

                   </div>


                <!--Second Slider -->
                <div class="carousel-item" style="background: url('img/index-sie.jpg') top center no-repeat;
                                                         background-size: cover; height:90vh";>
                    <div class="container">

                        <div class="text-wrapper animated fadeInRight">
                            <div class="row justify-content-end ">


                            </div>
                        </div>

                    </div>

                </div>

                <!--Third Slider -->
                <div class="carousel-item" style="background: url('img/pink.png') center center no-repeat;
                                                         background-size: cover; height:90vh";>

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

                            <div class="col-md-6">
                                <h4 >who are we</h4>
                                <p class="animated flipInX">Knovva Academy is a team of passionate educators from around the world who believe that a great education doesn’t end in the classroom. We value curiosity and diversity and are united by our shared love of learning, so we came together to help students of all backgrounds experience and discuss fresh global perspectives.<br>

                                </p>

                            </div>

                            <div class="col-md-5 " >

                                <div style="position: relative" class="animated fadeIn">
                                    <img class="playgif img img-responsive"  data-swap="img/minion.gif" src="img/static.gif" style="width: 100%;height: 100%;cursor: pointer">


                                    <a data-fancybox href="https://youtu.be/FE0rKL_HvbQ" style="position:absolute;left:50%;top:50%;display: block;font-size: 50px;transform: translate(-50%, -50%);"><i style="color: #d9d9d9;border-color: #d0d0d0" class="fa fa-play-circle" aria-hidden="true"></i></a>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-md-6">
                                <h4  >what we do</h4>
                                <p class="animated flipInX">Catering to students from around the world, Knovva Academy utilizes a mix of online and in-person courses (blend learning) for teens in order to challenge their expectations about education; we strive to provoke our students to ask, think, and learn content largely untouched in their public school system. We draw on experiential and project-based learning practices to engage students in politics, engineering, computer science, literature, and more. All of these subjects can help students uncover their own passions, and their own directions. </p>

                            </div>



                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-md-6">
                                <h4  >What We Value</h4>
                                <p class="animated flipInX">We maintain deep-seated relationships with our students and parents, both during and throughout our programs. We utilize in-person informational sessions, phone calls, digital media, and webinars to build a peer community of students and parents. Our dynamic team of native Mandarin, Spanish, and English speakers allows easy communication, and clarity of cultural expectations. Knovva Academy continues to receive high praise from parents who have felt the deep involvement of their children’s participation in our advanced learning programs.
                                </p>

                            </div>


                        </div>
                    </div>
                </div>



            </div>

            <!--CONTROLLER-->
            <div class="controller">
                <a class="animated fadeInLeft infinite" href="#carouselExampleControls3" role="button" data-slide="prev">
                    <i class="fa fa-caret-left " aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>    &nbsp; &nbsp;

                <a class="animated fadeInRight infinite" href="#carouselExampleControls3" role="button" data-slide="next">
                    <i class="fa fa-caret-right " aria-hidden="true"></i>

                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>
</section>


<!-- our features -->
<section class="features">

    <div class="container">
        <h4>our benefits</h4>
        <div class="row ">
<!--            <div class="col-md-3 col-sm-6 animation-item">-->
<!---->
<!--               <div class="animation-container">-->
<!--                   <div class="animation-inner-wrapper" >-->
<!--                       <img class="img img-responsive" id="a11" src="img/step3-1.svg" style="position:relative;" >-->
<!--                       <img class="img img-responsive" id="a12" src="img/step3-2.svg" >-->
<!--                       <img class="img img-responsive" id="a13" src="img/step3-3.svg" >-->
<!---->
<!--                   </div>-->
<!--               </div>-->
<!---->
<!---->
<!--                <h3>1</h3>-->
<!--                <hr/>-->
<!--                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>-->
<!---->
<!--            </div>-->

            <div class="col-md-4   animation-item">

                <div class="animation-container">
                    <div class="animation-inner-wrapper" >
                        <img class="img img-responsive"  src="svg2/circle.svg" style="position:relative;" >
                        <img class="img img-responsive" id="thinblue" src="svg2/bluecircle.svg" style="" >
                        <img class="img img-responsive" id="arrow" src="svg2/white-arrow.svg" style="">


                    </div>
                </div>


                <h3>1</h3>
                <hr/>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>

            </div>

            <div class="col-md-4  animation-item">

                <div class="animation-container">
                    <div class="animation-inner-wrapper" >

                        <img class="img img-responsive" id="earth" src="svg2/earth.svg" style="position:relative;" >
                        <img class="img img-responsive" id="thickblue" src="svg2/bluethickcircle.svg" style="" >
                        <img class="img img-responsive" id="cycle" src="svg2/Icons-05.svg" style="top:0px" >
                    </div>
                </div>



                <h3>2</h3>
                <hr/>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>

            </div>

            <div class="col-md-4   animation-item">

                <div class="animation-container">
                    <div class="animation-inner-wrapper" >
                        <img class="img img-responsive" id="moon" src="svg2/moon.svg" style="position:relative;" >
                        <img class="img img-responsive" id="heart"  src="svg2/heart.svg" style="">
                    </div>
                </div>



                <h3>3</h3>
                <hr/>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>

            </div>


        </div>
    </div>
</section>


<!--Feature programs-->
<section class="feature-programs  jumbotron">
    <div class="container">
        <h4>feature programs</h4>

       <div class="row">
           <a class="btn">explore the programs</a>
       </div>
    </div>
</section>

<!-- testimonail -->
<section class="testimonial">

  <div class="container-fluid">
      <h4>why people love us</h4>


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
                                      <h6>Student Name </h6>
                                      <p> School Name</p>
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
                                      <h6>Student Name </h6>
                                      <p> School Name</p>
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
                                      <h6>Student Name </h6>
                                      <p> School Name</p>
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
          </div>  <!--Quotes slider ends-->


  </div>
</section>


<?php
include 'footer.php';

?>