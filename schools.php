<?php 
    session_start();

    ob_start();
?>

<?php include ('general_admin_header.php'); ?>
   
<style type="text/css">
	.form-group label{
		color: black;
	}

	.form-group .form-control option{
		color: black;
	}

	.form-group .form-control{
		color: black;
		border-color : orange;
	}


</style>


 
<?php 
$errors = array();

include('db_connect.php');  
if (isset($_POST['confirm'])) {
			
			$schoolNames = $_POST['schoolNames'];
			$check_duplicate_schoolNames = "SELECT schoolNames FROM schools WHERE schools.schoolNames = '".$schoolNames."'";
			$query_schoolNames = mysqli_query($conn, $check_duplicate_schoolNames) or die(mysqli_error($conn));
			$schoolNames_count = mysqli_num_rows($query_schoolNames);
			if ($schoolNames_count > 0) {
				array_push($errors, "school name already exist");
		
			}


			$email = $_POST['email'];
			$check_duplicate_email = "SELECT email FROM schools WHERE email = '".$email."'";
			$query_email = mysqli_query($conn, $check_duplicate_email) or die(mysqli_error($conn));
			$email_count = mysqli_num_rows($query_email);
			if ($email_count > 0) {
				array_push($errors, "email already taken, Please use another email");
		
			}

			$mobile = $_POST['mobile'];
			$check_duplicate_mobile = "SELECT mobile FROM schools WHERE mobile = '".$mobile."'";
			$query_mobile = mysqli_query($conn, $check_duplicate_mobile) or die(mysqli_error($conn));
			$mobile_count = mysqli_num_rows($query_mobile);
			if ($mobile_count > 0) {
				array_push($errors, "Mobile number already taken, Please use another another number");
		
			}

		if (count($errors)==0) {
		
			$sql = "INSERT INTO schools(schoolNames, email, mobile) VALUES('".$schoolNames."', '".$email."', '".$mobile."')";

			$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

			 $_SESSION['message'] = "School Registered Sucessfully Submitted!" ;
    		$_SESSION['msg_type'] = "danger";

					
			}

		}
		

	?>


	


<div id="contact" class="container-fluid wb" style="padding-top: 10px">
    <div class="section-title text-center">
        <h3><b>REGISTERING SCHOOL</b></h3>
      
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div class="contact_form">

	<form class="form" name="contactform" method="post">
		<div class="row">				
				 <?php
                 if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>

                <a href="general_admin_page.php" style="color: darkgreen;">Home</a>


                    </div>
                    
                <?php endif ?>

				<fieldset>
					 <b><?php include ('signup_error.php'); ?></b>
                
					<div class="form-group">
						<label>Institution<b style="color: red;">*</b></label>
						<input type="text" name="schoolNames" class="form-control" required="schoolNames">
					
					</div>

					

					<div class="form-group">
						<label>Email<b style="color: red;">*</b></label>
						<input type="email" name="email" class="form-control" required="email">
					</div>

					<div class="form-group">
						<label>Mobile<b style="color: red;">*</b></label>
						<input type="mobile" name="mobile" class="form-control" required="mobile">
					</div>


					<div>
						<input type="submit" name="confirm" value="Register" class="btn btn-light btn-radius grd1 btn-block btn-brd">
					</div>
				</fieldset>
			</div>

	</form>
</div>
</div>
</div>

    <?php include 'footer.php' ?>
</body>
</html>