<?php
require_once('program.php');
$pageTitle=" Knovva Academy | Programs - Readicorn International High School Program";
$seo_des = "This is for description for Readicorn";

$og_url = "https://www.knovva.com/reading-literature";
$this_program = $program_redicorn;
$og_img = "https://knovva.com/".$this_program->get_program_imgURL();

include 'header.php';

?>


<!--g20-banner-->
<div class="rd-banner" >
    <div class="container">

        <div class="g20-slogan animated fadeInDown" >

            <div class="row justify-content-center">
<!--                <h2 >social innovation and leadership program</h2>-->
            </div>

<!--            <div class="row justify-content-center">-->
<!--                <div class="col-sm-8">-->
<!--                    <a class="fancy" data-fancybox href="img/g20-landing.mp4" >watch the video</a>-->
<!--                </div>-->
<!--            </div>-->

        </div>

    </div>

</div>


<!--course-intro-->
<div class="course">
    <div class="container">
        <h2><?php echo $this_program->get_program_title(); ?></h2>

         <div class="row">
           <div class="col-md-8">

               <div class="course-general-info">
                   <div class="row">

<!--                       <div class="col-sm-6 teacher-info">-->
<!--                           <div class="row">-->
<!--                               <div class="col-xs-3 teacher-image">-->
<!--                                   <img class="img figure-img" src="img/teacher-placeholder.jpg" width="50" height="50" >-->
<!--                               </div>-->
<!---->
<!--                               <div class="col-xs-9 teacher-name">-->
<!--                                   <p>teacher</p>-->
<!--                                   <p><b>name</b></p>-->
<!--                               </div>-->
<!--                           </div>-->
<!---->
<!--                       </div>-->

                       <div class="col-sm-6 categories-info">
                           <p>Subject</p>
                           <p><b>Literature</b></p>
                       </div>
                   </div>
               </div>

               <h5>About the Course</h5>
               <p>A program for high school English language learners seeking opportunities
                   to read and study literature in a supportive online environment.
               <ul>
                   <li>Intended for 9th and 10th grade students, Knovva Academy’s Literature and Reading Program is designed to provide enrichment for aspiring students in the fields of reading, literature and the English language. </li>
                   <li>Emphasis placed on reading comprehension, decoding, and creative writing workshops.</li>
               </ul>
               </p>

               <h5>Course Structure</h5>
               <p>Students read independently from the assigned literature selection and participate in weekly 45 minute live instructor facilitated discussion focusing on different themes. Students will engage with instructor for individualized biweekly one to one mentoring sessions of 15 minutes each.
                   Literature selections can be customized or groups of 12 or more.


               </p>
           </div>

           <div class="col-md-4">
               <div class="feature-wrapper">
                   <h4>Course Features</h4>
                   <ul class="list-unstyled">
                       <li><h5><i class="fa fa-calendar" aria-hidden="true"></i>start time:<span class="pull-right">November 3rd 2017</span></h5></li>
                       <li><h5><i class="fa fa-clock-o" aria-hidden="true"></i>duration:<span class="pull-right">6 weeks per session</span></h5></li>
                       <li><h5><i class="fa fa-map-marker" aria-hidden="true"></i>location:<span class="pull-right">online</span></h5></li>
                       <li><h5><i class="fa fa-users" aria-hidden="true"></i>student:<span class="pull-right">25</span></h5></li>
                       <li><h5><i class="fa fa-level-up" aria-hidden="true"></i>grade:<span class="pull-right">8 - 10</span></h5></li>
                   </ul>
<!--                   <h5>course price: $2998</h5>-->
                   <div class="social-share">
                       <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fknovva.com/reading-literature&layout=button&size=small&mobile_iframe=true&width=59&height=20&appId" width="59" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                       <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="Hi! I think that the Readicorn program is awesome! " data-url="<?php echo $this_program->get_url(); ?>" data-via="knovva_academy" data-related="knovva_academy" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                       <!--Linkedin-->
                       <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                       <script type="IN/Share" data-url="<?php echo $this_program->get_url(); ?>"></script>

                   </div>
                   <a class="enroll-btn" data-toggle="modal" data-target="#myModal">Request for More Information</a>
               </div>
           </div>
       </div>
    </div>
</div>

<!--course structure-->
<div class="course-structure">
    <div class="container">
        <h5>Curriculum Structure </h5>

        <table class="table table-striped table-sm">
            <thead>
            <tr >
                <th width="20%" class="text-center">week#</th>
                <th width="80%">Content</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row" class="text-center">week 1-12</th>
                <td>
                    <ul class="list-inline">
                        <li>adventure, self-discovery, hope, love, responsibility.</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th scope="row" class="text-center">week 13-24</th>
                <td>
                    <ul class="list-inline">
                        <li>identity, relationships, coming-of-age, gender</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th scope="row" class="text-center">week 25-36</th>
                <td>
                    <ul class="list-inline">
                        <li>relationships, identity struggle, battle of good and evil, empathy.</li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<!--benefits-->
<div class="course-benefits course-benefits-2col">
    <div class="container">
        <h2>benefits</h2>

        <div class="row wow justify-content-center fadeIn">
           <div class="col-md-1">
               <i class="fa fa-microphone" aria-hidden="true"></i>
           </div>

           <div class="col-md-9">
               <p>students will articulate their own visions and values.
               </p>
           </div>
       </div>

        <div class="row wow justify-content-center fadeIn">

            <div class="col-md-1">
                <i class="fa fa-handshake-o" aria-hidden="true"></i>
            </div>

            <div class="col-md-9">
                <p>collaborate with international peers to explore real-life questions and meaning
                </p>
            </div>
        </div>


        <div class="row wow justify-content-center fadeIn">
            <div class="col-md-1">
                <i class="fa fa-users" aria-hidden="true"></i>
            </div>
            <div class="col-md-9">
                <p>demonstrate an understanding of cultural and social determinants of identity
                </p>
            </div>
        </div>
        <div class="row wow justify-content-center fadeIn">
            <div class="col-md-1">
                <i class="fa fa-book" aria-hidden="true"></i>
            </div>
            <div class="col-md-9">
                <p>improve reading, writing and comprehension skills in English
                </p>
            </div>
        </div>

        <div class="row wow justify-content-center fadeIn">
            <div class="col-md-1">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            </div>
            <div class="col-md-9">
                <p>strengthen academic, linguistic, and social literacy for college and beyond
                </p>
            </div>
        </div>

        <div class="row wow justify-content-center fadeIn">
            <div class="col-md-1">
                <i class="fa fa-globe" aria-hidden="true"></i>
            </div>
            <div class="col-md-9">
                <p>nurture global and cross-cultural perspectives in writing and thought
                </p>
            </div>
        </div>
    </div>
</div>

<!-- testimonail -->
<section class="testimonial">

  <div class="container-fluid">
      <h4></h4>


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
