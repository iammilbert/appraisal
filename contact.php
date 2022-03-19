<?php 
	session_start();

	ob_start();
?>
<!DOCTYPE html>
<?php include('header.php'); ?>

<style type="text/css">
		form{
			color: black;
		}

		.col-lg-12 .form-control{
			color: black;
			border-color: orange;
		}

			.col-lg-12 .form-control option{
			color: black;
			border-color: orange;
		}


</style>

<?php

	if (isset($_POST['submit'])) {

		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$message = $_POST['message'];

$sql = "INSERT INTO contact(firstName, lastName, email, mobile, message) VALUES('".$firstName."', '".$lastName."', '".$email."', '".$mobile."', '".$message."')";

		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		$_SESSION['message'] = "message sent successfully, thank yo for reaching us";
		$_SESSION['msg_type'] = "danger";
	}

?>


   

    <div id="contact" class="container-fluid wb" style="padding-top: 10px">
            <div class="section-title text-center">
                <h3>Get in touch</h3>
                <p class="lead">Please fill out the form below.</p>
            
            </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form">
                    	
                    		<?php
                 if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>

                <a href="login.php" style="color: darkgreen;">Login here</a>
                    </div>
                    
                <?php endif ?>
                        <form class="form" method="POST">
                            <fieldset>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                	<label>First Name</label>
                                    <input type="text" name="firstName" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                	<label>Last Name</label>
                                    <input type="text" name="lastName" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                	<label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                	<label>Mobile</label>
                                    <input type="mobile" name="mobile" class="form-control" placeholder="mobile">
                                </div>
                                
                               
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                	<label>Message</label>
                                    <textarea class="form-control" name="message" rows="6" placeholder="Please type your Message here in details Please..."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                                    <button type="submit" name="submit" class="btn btn-light btn-radius btn-brd">Send Message</button>

                                    <a href="index.php" name="cancel" class="btn btn-light btn-radius btn-brd">Cancel</a>
                                </div>


                             
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
			
			<div class="row">
				<div class="col-md-offset-1 col-sm-10 col-md-10 col-sm-offset-1 pd-add">
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-location2"></i>
						</div>
						<h3>Headquarters</h3>
						<p>PO Box 16122 No. 1 Karji Junction 
							<br>Kaduna, Kaduna state </p>
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<h3>Email Us</h3>
						<p>info@yoursite.com
							<br>info@yoursite.com</p>
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-headphones"></i>
						</div>
						<h3>Call Us</h3>
						<p>+234 813 795 0284
							<br>+234 805 970 9121</p>
					</div>
				</div>
			</div><!-- end row -->
			
        </div><!-- end container -->
    </div><!-- end section -->

    <?php include ('footer.php'); ?>  

</body>
</html>