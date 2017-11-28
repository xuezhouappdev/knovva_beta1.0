<?php
$pageTitle="Boston-based Education Company | Knovva Academy";
$seo_des  = "Knovva Academy is a boston-based educational company that offers unique project-based learning programs and activities for high school students around the world that utilize blended learning, in and out of the classroom. ";
$seo_kwd = "Educational programs, Flip model, Blended learning, High school program, Extra curricular activities";
$canonical = "https://www.knovva.com/about";
include 'header.php';


	class teacher {
        var $name;
        var $bio;
        var $title;
        var $imgURL;

        function __construct($name, $bio, $title, $imgURL) {
            $this->name = $name;
            $this->bio =  $bio;
            $this->title = $title;
            $this->imgURL = $imgURL;

        }

        function set_name($new_name) {
            $this->name = $new_name;
        }


        public function get_name() {
            return $this->name;
        }

        function get_bio() {
            return $this->bio;
        }

        function get_title() {
            return $this->title;
        }

        function get_imgURL() {
            return $this->imgURL.".jpg";
        }

    }

    $teacher_Ross = new Teacher("Ross Weissman","Ross works to leverage effective technologies, research and the strengths of dynamic teams to craft meaningful and impactful educational programming for students from around the world. Ross has worked as an educator and interventionist internationally and across social context throughout his professional career.  He holds his master's from the Harvard Graduate School of Education. ","Chief Learning Officer","./img/portrait/portrait-ross");
    $teacher_Pat = new Teacher("Patricia Lozada","Patricia holds a Master’s degree in Public Administration from Harvard Kennedy School and a Master in Corporate Law with an specialization in Public Services by Pontifical University at Peru. Ms. Lozada is an attorney specialized in Public Services and Public Administration.","Academic Designer","./img/portrait/portrait-pat");
    $teacher_Abby = new Teacher("Abby Hu","Abby holds a Master's degree in Public Policy from Harvard Kennedy School of Government and a B.S. in Applied Economics from Renmin University of China. She served in the nonprofit EduRunner and organized summer programs for Chinese rural and migrant children.","Senior Product Manager","./img/portrait/portrait-abby");
    $teacher_Orly = new Teacher("Orly Barad","Orly worked as a media professional in leading Israeli television productions before moving to the US and completing a Masters degree in Technology, Innovation and Education at the Harvard Graduate School of Education. She worked on online courses for Boston University and Harvard Medical School, and is passionate about creating engaging and empowering learning experiences.","Senior Online Learning Designer","./img/portrait/portrait-orly");
    $teacher_Chunxiao = new Teacher("Chunxiao Han","Chunxiao holds a Master's degree in Language and Literacy from Harvard Graduate School of Education and a B.A. in English Language and Literature from Beijing Foreign Studies University. She worked as the English language teacher in the Beijing New Oriental School, E-plus for K-12, Beijing Lengquan Village Hope Community, Beijing School for the Blind, and three local schools in Cameroon, Africa.","Academic Specialist","./img/portrait/portrait-chunxiao");
    $teacher_Becca = new Teacher("Rebecca Shuman","Becca completed her Ed.M in Prevention Science and Practice at the Harvard Graduate School of Education and her undergraduate studies at Eugene Lang College The New School for Liberal Arts. She has worked with children and adolescents in a variety of alternative educational settings and is passionate about supporting youth in achieving their goals by helping them navigate and access tools to strengthen resilience, promote social-emotional growth, and reach their full potential.","Educational Specialist","./img/portrait/portrait-becca");




?>



<div class="about-banner" style="background: url('img/about-slider.jpg')center center no-repeat;background-size: cover;height: 80vh" aria-label="Boston Team Education">
    <div class="text-wrapper">

        <div class="container">
            <div class="text">
                <h1 class="animated fadeInDown">Expanding Learning Opportunities</h1>
            </div>
        </div>

    </div>
</div>



<!--who we are-->
<div class="vision section-about">
    <div class="container">
<!--        <h5>This is your world. Connect to a new generation of learning.</h5>-->

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <img class="img img-responsive img-thumbnail" src="img/about/about-ourteam.jpg" alt="Knovva Academy Education ">
            </div>

            <div class="col-lg-5">
                <div class="text-wrapper">
                    <div class="text">
                        <h5>Who we are</h5>
                        <p>Knovva Academy is an international education company based in Boston, Massachusetts. Knovva Academy was founded by a group of friends, who collaborated after working in their respective industries of education, community development, television production, and public policy. They agreed upon a common purpose of supporting young people in their pursuit of personal, professional, and academic meaning.</p>
                    </div>
                </div>
            </div>

        </div>


        <div class="row justify-content-center">

            <div class="col-lg-5">
                <div class="text-wrapper">
                    <div class="text">
                        <h5>What we do</h5>
                        <p>We cater to students, K-12,  from around the world. Knovva Academy utilizes a mix of online and in-person courses (blended learning) for teens in order to challenge their expectations about education. We encourage our students to think critically and ask questions about global issues largely untouched in their public school system. We draw on experiential and project-based learning practices to engage students in politics, engineering, computer science, literature, and more. All of these subjects can help students uncover their own passions, and their own directions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <img class="img img-responsive img-thumbnail" src="img/about/about-whatwedo.jpg" alt="Educators in Boston">
            </div>

        </div>


        <div class="row justify-content-center">
            <div class="col-lg-5">
                <img class="img img-responsive img-thumbnail" src="img/about/about-whatwevalue.jpg" alt="Boston Students">
            </div>

            <div class="col-lg-5">
                <div class="text-wrapper">
                    <div class="text">
                        <h5>What we value</h5>
                        <p>We maintain deep-seated relationships with our students and parents, both during and throughout our programs. We utilize in-person informational sessions, phone calls, digital media, and webinars to build a peer community of students and parents. Our dynamic team of native Mandarin, Spanish, and English speakers allows for easy communication, and clarity of cultural expectations. Knovva Academy continues to receive high praise from parents who have felt the deep involvement of their children’s participation in our advanced learning programs.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--our team-->
<div class="ourteam jumbotron">
    <div class="container">
        <h3>Meet Our Academic Team</h3>
        <div class="row justify-content-center">
            <!--1-->
            <div class="col-lg-3">
                <div class="card" >
                    <a data-toggle="modal" data-target="#myModal2">
                        <img class="img img-responsive" src=<?php echo $teacher_Ross->get_imgURL(); ?> >
                    </a>


                    <div class="modal fade profile-modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="img img-responsive" width="300px" height="auto" src=<?php echo $teacher_Ross->get_imgURL(); ?>>
                                        </div>
                                        <div class="col-md-7">
                                            <h5><?php echo $teacher_Ross->get_name(); ?></h5>
                                            <h6><?php echo $teacher_Ross->get_title(); ?></h6>
                                            <p><?php echo $teacher_Ross->get_bio(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-wrapper">
                        <h5><?php echo $teacher_Ross->get_name(); ?></h5>
                        <p><?php echo $teacher_Ross->get_title(); ?></p>
                    </div>
                </div>
            </div>

            <!--2-->
            <div class="col-lg-3">
                <div class="card">

                    <a data-toggle="modal" data-target="#myModalPat">
                        <img class="img img-responsive" src=<?php echo $teacher_Pat->get_imgURL(); ?> >
                    </a>


                    <div class="modal fade profile-modal" id="myModalPat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="img img-responsive" width="300px" height="auto" src=<?php echo $teacher_Pat->get_imgURL(); ?>>
                                        </div>
                                        <div class="col-md-7">
                                            <h5><?php echo $teacher_Pat->get_name(); ?></h5>
                                            <h6><?php echo $teacher_Pat->get_title(); ?></h6>
                                            <p><?php echo $teacher_Pat->get_bio(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-wrapper">
                        <h5><?php echo $teacher_Pat->get_name(); ?></h5>
                        <p><?php echo $teacher_Pat->get_title(); ?></p>
                    </div>
                </div>
            </div>

            <!--3-->
            <div class="col-lg-3">
                <div class="card">

                    <a data-toggle="modal" data-target="#myModalAbby">
                        <img class="img img-responsive" src=<?php echo $teacher_Abby->get_imgURL(); ?> >
                    </a>


                    <div class="modal fade profile-modal" id="myModalAbby" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="img img-responsive" width="300px" height="auto" src=<?php echo $teacher_Abby->get_imgURL(); ?>>
                                        </div>
                                        <div class="col-md-7">
                                            <h5><?php echo $teacher_Abby->get_name(); ?></h5>
                                            <h6><?php echo $teacher_Abby->get_title(); ?></h6>
                                            <p><?php echo $teacher_Abby->get_bio(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-wrapper">
                        <h5><?php echo $teacher_Abby->get_name(); ?></h5>
                        <p><?php echo $teacher_Abby->get_title(); ?></p>
                    </div>
                </div>
            </div>


        </div>

        <div class="row justify-content-center">

            <!--4-->
            <div class="col-lg-3">
                <div class="card">

                    <a data-toggle="modal" data-target="#myModalOrly">
                        <img class="img img-responsive" src=<?php echo $teacher_Orly->get_imgURL(); ?> >
                    </a>


                    <div class="modal fade profile-modal" id="myModalOrly" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="img img-responsive" width="300px" height="auto" src=<?php echo $teacher_Orly->get_imgURL(); ?>>
                                        </div>
                                        <div class="col-md-7">
                                            <h5><?php echo $teacher_Orly->get_name(); ?></h5>
                                            <h6><?php echo $teacher_Orly->get_title(); ?></h6>
                                            <p><?php echo $teacher_Orly->get_bio(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-wrapper">
                        <h5><?php echo $teacher_Orly->get_name(); ?></h5>
                        <p><?php echo $teacher_Orly->get_title(); ?></p>
                    </div>
                </div>
            </div>
            <!--5-->
            <div class="col-lg-3">
                <div class="card" id="test">

                    <a data-toggle="modal" data-target="#myModalBecca">
                        <img class="img img-responsive" src=<?php echo $teacher_Chunxiao->get_imgURL(); ?> >
                    </a>
                    <div class="modal fade profile-modal" id="myModalBecca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="img img-responsive" width="300px" height="auto" src=<?php echo $teacher_Chunxiao->get_imgURL(); ?>>
                                        </div>
                                        <div class="col-md-7">
                                            <h5><?php echo $teacher_Chunxiao->get_name(); ?></h5>
                                            <h6><?php echo $teacher_Chunxiao->get_title(); ?></h6>
                                            <p><?php echo $teacher_Chunxiao->get_bio(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-wrapper">
                        <h5><?php echo $teacher_Chunxiao->get_name(); ?></h5>
                        <p><?php echo $teacher_Chunxiao->get_title(); ?></p>
                    </div>
                </div>
            </div>

            <!--6-->
            <div class="col-lg-3">
                <div class="card">

                    <a data-toggle="modal" data-target="#myModalChunxiao">
                        <img class="img img-responsive" src=<?php echo $teacher_Becca->get_imgURL(); ?> >
                    </a>
                    <div class="modal fade profile-modal" id="myModalChunxiao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="img img-responsive" width="300px" height="auto" src=<?php echo $teacher_Becca->get_imgURL(); ?>>
                                        </div>
                                        <div class="col-md-7">
                                            <h5><?php echo $teacher_Becca->get_name(); ?></h5>
                                            <h6><?php echo $teacher_Becca->get_title(); ?></h6>
                                            <p><?php echo $teacher_Becca->get_bio(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-wrapper">
                        <h5><?php echo $teacher_Becca->get_name(); ?></h5>
                        <p><?php echo $teacher_Becca->get_title(); ?></p>
                    </div>
                </div>
            </div>

<!--            <div class="col-lg-3">-->
<!--                <div class="card">-->
<!---->
<!--                    <img class="img img-responsive" src="http://via.placeholder.com/300">-->
<!---->
<!--                    <div class="text-wrapper">-->
<!--                        <h5>Teacher Name</h5>-->
<!--                        <p>Title</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col-lg-3">-->
<!--                <div class="card">-->
<!---->
<!--                    <a data-toggle="modal" data-target="#myModal2"><img class="img img-responsive" src="http://via.placeholder.com/300"></a>-->
<!---->
<!--                    <div class="modal fade profile-modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--                        <div class="modal-dialog" role="document">-->
<!--                            <div class="modal-content">-->
<!--                                <div class="modal-header">-->
<!--                                    <h5 class="modal-title" id="exampleModalLabel"></h5>-->
<!--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                                        <span aria-hidden="true">&times;</span>-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                                <div class="modal-body">-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-md-5">-->
<!--                                            <img class="img img-responsive" src="http://via.placeholder.com/300x350">-->
<!--                                        </div>-->
<!--                                        <div class="col-md-7">-->
<!--                                            <h5>Teacher name</h5>-->
<!--                                            <h6>Title</h6>-->
<!--                                            <p>Profile here</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="text-wrapper">-->
<!--                        <h5>Teacher Name</h5>-->
<!--                        <p>Title</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>

    </div>

</div>


<!--our partner-->
<div class="ourpartner section-partner">
    <div class="container">
        <h3>Our Partners</h3>
        <hr/>
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

<script>


    $(".card").hover(function(){
        $(this).find('h5').addClass('changeColor');
        //alert('hello');
    },function(){
        $(this).find("h5").removeClass('changeColor');
    });
</script>