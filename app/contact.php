<?php
include 'header.php';

?>


<div class="contact-banner">
    <div class="container">
       <div class="row justify-content-start">
           <div class="col-md-5">
               <h1 >get in touch</h1>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
           </div>
       </div>
    </div>
</div>

<div class="contact-form-wrapper">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="form-area">

                    <form role="form" method="POST" action="hubspot-input.php">
                        <br style="clear:both">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="first name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="last name" required>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="phone number" >
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" type="textarea" id="message" name="message" placeholder="message" maxlength="140" rows="4" required></textarea>
                        </div>

                        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right contact-submit">submit</button>

                    </form>


                </div>
            </div>
        </div>


    </div>
</div>



<?php
include "footer.php";
?>