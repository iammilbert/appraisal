<?php 
    session_start();

    ob_start();
?>

<?php include ('header.php'); ?>
   
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

if (isset($_POST['confirm'])) {
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$middleName = $_POST['middleName'];
			$gender = $_POST['gender'];
			$school_id = $_POST['school_id'];
			$faculty_id = $_POST['faculty_id'];
			$department_id = $_POST['department_id'];
			$course_id = $_POST['course_id'];
			$password = $_POST['password'];
			$password_confirm = $_POST['password_confirm'];

			$email = $_POST['email'];
			$check_duplicate_email = "SELECT email FROM student_signup WHERE email = '".$email."'";
			$query_email = mysqli_query($conn, $check_duplicate_email) or die(mysqli_error($conn));
			$email_count = mysqli_num_rows($query_email);
			if ($email_count > 0) {
				array_push($errors, "email already taken, Please use another email");
		
			}

			$mobile = $_POST['mobile'];
			$check_duplicate_mobile = "SELECT mobile FROM student_signup WHERE mobile = '".$mobile."'";
			$query_mobile = mysqli_query($conn, $check_duplicate_mobile) or die(mysqli_error($conn));
			$mobile_count = mysqli_num_rows($query_mobile);
			if ($mobile_count > 0) {
				array_push($errors, "Mobile number already taken, Please use another another number");
		
			}


			$matric_Number = $_POST['matric_Number'];
			$check_duplicate_matric = "SELECT matric_Number FROM student_signup WHERE matric_Number = '".$matric_Number."'";
			$query_matric = mysqli_query($conn, $check_duplicate_matric) or die(mysqli_error($conn));
			$matric_count = mysqli_num_rows($query_matric);
			if ($matric_count > 0) {
				array_push($errors, "Registration number already exist, please use another Registration number");
			}

			if ($password != $password_confirm) {
				array_push($errors, "The two password do not match");
			}




			if (count($errors)==0) {
	
			$sql = "INSERT INTO student_signup(firstName, lastName, middleName, gender, school_id, faculty_id, department_id, course_id, matric_Number, password, password_confirm, email, mobile) VALUES('".$firstName."', '".$lastName."', '".$middleName."', '".$gender."', '".$school_id."', '".$faculty_id."', '".$department_id."', '".$course_id."', '".$matric_Number."', '".$password."', '".$password_confirm."', '".$email."', '".$mobile."')";

			$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

			 $_SESSION['message'] = "Record has been Sucessfully Submitted!" ;
    		$_SESSION['msg_type'] = "danger";

					
			}
		
}
	?>


	


<div id="contact" class="container-fluid wb" style="padding-top: 10px">
    <div class="section-title text-center">
        <h3><b>CREATING ACCOUNT</b></h3>
        <p class="lead">Please fill out the form below.</p>
            
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

                <a href="login.php" style="color: darkgreen;">Login here</a>
                    </div>
                    
                <?php endif ?>

				<fieldset">
					<b><?php include ('signup_error.php'); ?></b>
					<div class="form-group">
						<label>First Name<b style="color: red;">*</b></label>
						<input type="text" name="firstName" class="form-control" required="firstName">
					</div>

					<div class="form-group">
						<label>Last Name<b style="color: red;">*</b></label>
						<input type="text" name="lastName" class="form-control" required="lastName">
					</div>

					<div class="form-group">
						<label>Middle Name</label>
						<input type="text" name="middleName" class="form-control" required="middleName">
					</div>

						<div class="form-group">
						<label>Gender<b style="color: red;">*</b></label>
							<select class="form-control" name="gender" required="gender">
						<option value=""> -select gender-</option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>



					<div class="form-group">
						<label>Institution<b style="color: red;">*</b></label>
					<?php 
							$sql = "SELECT * FROM schools";
							$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
						?>
							<select class="form-control" name="school_id" required="school_id">
								<option value=""> -select your Institution-</option>
								<?php while($row = mysqli_fetch_assoc($query)): ?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['schoolNames']; ?></option>
							<?php endwhile; ?>
							</select>
					</div>




					<div class="form-group">

						<?php 
							$sql = "SELECT * FROM faculties";
							$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
						?>
						<label>Faculty<b style="color: red;">*</b></label>
							<select class="form-control" name="faculty_id" required="faculty_id">
								<option value=""> -select faculty-</option>
								<?php while($row = mysqli_fetch_assoc($query)): ?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['faculties']; ?></option>
							<?php endwhile; ?>
							</select>

					</div>



					<div class="form-group">

						<?php 
							$sql = "SELECT * FROM departments";
							$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
						?>
						<label>Department<b style="color: red;">*</b></label>
							<select class="form-control" name="department_id" required="department_id">
								<option value=""> -select department-</option>
								<?php while($row = mysqli_fetch_assoc($query)): ?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['departments']; ?></option>
							<?php endwhile; ?>
							</select>

					</div>


					<div class="form-group">
						<label>Course of Study<b style="color: red;">*</b></label>
						<select class="form-control" name="course_id" required="course_id">
						<option value=""> -select your course-</option>
					<?php 
						$sql = "SELECT * FROM courses";
						$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
					?>
							
								<?php while($row = mysqli_fetch_assoc($query)): ?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['courses']; ?></option>
							<?php endwhile; ?>
							</select>
					</div>

					<div class="form-group">
						<label>Matric. Number<b style="color: red;">*</b></label>
						<input type="text" name="matric_Number" class="form-control" required="matric_Number">
					</div>

					<div class="form-group">
						<label>Email<b style="color: red;">*</b></label>
						<input type="email" name="email" class="form-control" required="email">
					</div>

					<div class="form-group">
						<label>Mobile<b style="color: red;">*</b></label>
						<input type="mobile" name="mobile" class="form-control" required="mobile">
					</div>

					<div class="form-group">
						<label>Password<b style="color: red;">*</b></label>
						<input type="password" name="password" class="form-control" required="password">
					</div>

					<div class="form-group">
						<label>Confirm Password<b style="color: red;">*</b></label>
						<input type="password" name="password_confirm" class="form-control" required="password_confirm">
					</div>


					<div>
						<input type="submit" name="confirm" value="Register" class="btn btn-light btn-radius grd1 btn-block btn-brd">
					</div>

					<div class="form-group" style="padding-top: 10px; color: black"><b>Already Registered? <a href="login.php" style="color: darkgreen;">Login here</a> instead</b>
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