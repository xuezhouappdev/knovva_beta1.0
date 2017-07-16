<?php
include 'header.php';
?>

<!-- TOP Slide -->
<section class="slider">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <!--Slider -->
            <div class="carousel-inner" role="listbox">

                <!--First Slider -->
                <div class="carousel-item active" style="background: rgb(52, 152, 219);
                                                         background-size: cover; height:100vh";>
                    <div class="container">

                        <div class="text-wrapper animated fadeInRight">
                            <div class="row justify-content-end ">

                                <div class="col-sm-6 ">
                                    <h5>new to our app</h5>
                                    <h2 >
                                        try a day of snap <br />based
                                        on your lifestyle</h2>
                                    <a class="btn btn-cta">i'm interested</a>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

                <!--Second Slider -->
                <div class="carousel-item" style="background: rgb(255, 195, 0);
                                                         background-size: cover; height:100vh";>

                </div>

                <!--Third Slider -->
                <div class="carousel-item" style="background: RGB(240, 128, 128);
                                                         background-size: cover; height:100vh";>

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
        <div class="scrollformore">
            <p>scroll for more</p>
            <a href="#whoweare" id="scroll-cta"><i class="fa fa-angle-down animated infinite fadeInUp" aria-hidden="true"></i></a>

        </div>
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
                        <div class="row justify-content-start">

                            <div class="col-sm-5">
                                <h4 >who are we</h4>
                                <p class="animated flipInX">Knovva Academy is an international education company with its headquarters in Cambridge, Massachusetts. Knovva Academy was founded by a group of friends, who wanted to collaborate after working in their respective industries of education, community development, television production, and public policy. They agreed upon a common purpose of supporting young people in their pursuit of personal, professional, and academic meaning. </p>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-5">
                                <h4  >what we do</h4>
                                <p class="animated flipInX">Catering to students from around the world, Knovva Academy utilizes a mix of online and in-person courses (blend learning) for teens in order to challenge their expectations about education; we strive to provoke our students to ask, think, and learn content largely untouched in their public school system. We draw on experiential and project-based learning practices to engage students in politics, engineering, computer science, literature, and more. All of these subjects can help students uncover their own passions, and their own directions. </p>

                            </div>


                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-5">
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
        <h4>our featurers</h4>
        <div class="row justify-content-center">
            <div class="col-sm-3">
                <img class="img img-responsive" src="http://via.placeholder.com/200x200" >
                <h3>1</h3>
                <hr/>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
            </div>

            <div class="col-sm-3">
                <img class="img img-responsive" src="http://via.placeholder.com/200x200" >
                <h3>2</h3>
                <hr/>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>

            <div class="col-sm-3">
                <img class="img img-responsive" src="http://via.placeholder.com/200x200" >
                <h3>3</h3>
                <hr size="2"/>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>

            <div class="col-sm-3">
                <img class="img img-responsive" src="http://via.placeholder.com/200x200" >
                <h3>4</h3>
                <hr/>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
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
                                      <p>
                                          “Snap Kitchen defies the misconception that healthy foods can’t also be delicious…There is never a bad choice to make and I love the variety and their adventurous, creative menu. My taste buds are never bored.”</p>
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
                                      <p>
                                          “Snap Kitchen defies the misconception that healthy foods can’t also be delicious…There is never a bad choice to make and I love the variety and their adventurous, creative menu. My taste buds are never bored.”</p>
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
                                      <p>
                                          “Snap Kitchen defies the misconception that healthy foods can’t also be delicious…There is never a bad choice to make and I love the variety and their adventurous, creative menu. My taste buds are never bored.”</p>
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