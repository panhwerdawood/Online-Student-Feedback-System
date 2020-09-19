<?php 
include('dbconfig.php');
extract($_POST);
if(isset($save))
{

mysqli_query($conn,"insert into contact values('','$n','$m','$e','$msg',now())");
	
$err="<font color='green'>Admin will Contact you soon</font>";	

}

?>

        <div class="container">


        <!-- Content Row -->
       <div class="row">
            <div class="col-md-8">
                <h3><font>Contact us </font></h3>
                
                <form name="sentMessage" method="post" id="contactForm" novalidate>
                  <?php echo @$err; ?>
				    <div class="control-group form-group">
                        
						
						<div class="controls">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="n" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mobile Number:</label>
                            <input type="number" class="form-control" name="m" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="e" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" name="msg" cols="50" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="save" class="btn btn-primary">Send Message</button>
					<h1></h1>
                </form>
            </div>
			<div class="col-md-4" style="margin-top:30px">
                <h3>Contact Details</h3>
                <p>
                    Islamic University of Technology Dhaka.<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                     (+880) 181-6737-521</p>
                <p><i class="fa fa-envelope-o"></i> 
                    dawoodpanhwer2@gmail.com
                </p>
                <p><i class="fa fa-clock-o"></i> 
                     8:00 AM - 5:00 PM </p>
                <ul class="list-unstyled list-inline lis4t-social-icons">
                    <li>
                        <a href="https://www.facebook.com/dawood.panhwer.96/" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/dawood-panhwer-05a602160/" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/dawoodpanhwer/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        </div>

    <br/><br/>
    
    </div>
    <!-- /.container -->
