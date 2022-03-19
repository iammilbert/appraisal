<?php 
    session_start();
    ob_start();

include ('admin_header.php'); 

 
?>


<?php
	
$id = isset($_GET['id']) ? $_GET['id'] : '';
include('db_connect.php');

		$sql = "SELECT * FROM student_signup 

				INNER JOIN schools
				ON student_signup.school_id = schools.id 

				INNER JOIN faculties
				ON student_signup.faculty_id = faculties.id

				INNER JOIN departments
				ON student_signup.department_id = departments.id

				INNER JOIN courses
				ON student_signup.course_id = courses.id


		WHERE student_signup.id = '".$id."'";

		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		 $row = mysqli_fetch_assoc($query);


		if (isset($_POST['update'])) {

				$firstName = $_POST['firstName'];
				$lastName = $_POST['lastName'];
				$middleName = $_POST['middleName'];
				$gender = $_POST['gender'];
				$school_id = $_POST['school_id'];
				$faculty_id = $_POST['faculty_id'];
				$department_id = $_POST['department_id'];
				$course_id = $_POST['course_id'];
				$matric_Number = $_POST['matric_Number'];
				$mobile = $_POST['mobile'];
				$email = $_POST['email'];

		
$sql = "UPDATE student_signup SET firstName = '".$firstName."', lastName = '".$lastName."', middleName = '".$middleName."', gender = '".$gender."', school_id = '".$school_id."', faculty_id = '".$faculty_id."', department_id = '".$department_id."', course_id = '".$course_id."', matric_Number = '".$matric_Number."', mobile = '".$mobile."', email = '".$email."' WHERE id = '".$id."'";

			$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			
			$_SESSION['message'] = "Record has been updated!";
            $_SESSION['msg_type'] = "warning";

            header('location: registered_students.php');
	}

	?>

<style type="text/css">
	form{	
		color: black;
	}

	.form-group .form-control{	
		color: black;
		border-color: orange;
	}

</style>

<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>My Profile</h2>
						<ul class="page-title-link">
							<li><a href="student_page.php">Home</a></li>
							<li><a href="student_logout.php">Logout</a></li>
							<li><a href="#">Change Password</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="contact" class="section wb">
    	<div class="section-title text-center">
        		<h3><b>Edit and Submit</b></h3>

        			<?php
           		 if (isset($_SESSION['message'])): ?> 
              	<div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >

		        <?php 
		            echo $_SESSION['message'];
		            unset($_SESSION['message']);
		        ?>
		            </div>
		            
		        <?php endif ?>
    		</div>
        <div class="col-md-8 col-md-offset-2"  style="background-color: darkgrey">
           <div class="contact_form">
	<form class="form" method="POST" ">
		<div class="row">
			<div>
				<fieldset">
					<legend style="color: green;"><h2><b>Profile</b></h2></legend>
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<label>First Name<b style="color: red;">*</b></label>
						<input type="text" name="firstName" class="form-control" value="<?php echo $row['firstName']; ?>">
					</div>

					<div class="form-group">
						<label>Last Name<b style="color: red;">*</b></label>
						<input type="text" name="lastName" class="form-control" value="<?php echo $row['lastName']; ?>" >
					</div>

					<div class="form-group">
						<label>Middle Name</label>
						<input type="text" name="middleName" class="form-control" value="<?php echo $row['middleName']; ?>">
					</div>

						<div class="form-group">
						<label>Gender<b style="color: red;">*</b></label>
						<input type="text" name="gender" class="form-control" value="<?php echo $row['gender']; ?>">
					</div>

					

					<div class="form-group">
						<label>Institution<b style="color: red;">*</b></label>
						<select class="form-control" name="school_id">
								<option value="<?php echo $row['school_id']; ?>"><?php echo $row['schoolNames']; ?></option>
					<?php 
							$sql2 = "SELECT * FROM schools";
						$query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));

						?>
							
								<?php while($row2 = mysqli_fetch_assoc($query2)): ?>
								<option><?php echo $row2['schoolNames']; ?></option>
							<?php endwhile; ?>
							</select>
					</div>



					<div class="form-group">
						<label>Faculty<b style="color: red;">*</b></label>
						<select class="form-control" name="faculty_id">
								<option value="<?php echo $row['faculty_id']; ?>"><?php echo $row['faculties']; ?></option>
					<?php 
							$sql3 = "SELECT * FROM faculties";
							$query3 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
						?>
							
								<?php while($row3 = mysqli_fetch_assoc($query3)): ?>
								<option><?php echo $row3['faculties']; ?></option>
							<?php endwhile; ?>
							</select>
					</div>



					<div class="form-group">
						<label>Department<b style="color: red;">*</b></label>
						<select class="form-control" name="department_id">
								<option value="<?php echo $row['department_id']; ?>"><?php echo $row['departments']; ?></option>
					<?php 
							$sql4 = "SELECT * FROM departments";
						$query4 = mysqli_query($conn, $sql4) or die(mysqli_error($conn));
						?>
							
								<?php while($row4 = mysqli_fetch_assoc($query4)): ?>
								<option><?php echo $row4['departments']; ?></option>
							<?php endwhile; ?>
							</select>
					</div>


					
					<div class="form-group">
						<label>Course of Study<b style="color: red;">*</b></label>
						<select class="form-control" name="course_id">
								<option value="<?php echo $row['course_id']; ?>"><?php echo $row['courses']; ?></option>
					<?php 
							$sql5 = "SELECT * FROM courses";
						$query5 = mysqli_query($conn, $sql5) or die(mysqli_error($conn));
						?>
							
								<?php while($row5 = mysqli_fetch_assoc($query5)): ?>
								<option><?php echo $row5['courses']; ?></option>
							<?php endwhile; ?>
							</select>
					</div>



					<div class="form-group">
						<label>Matric. Number<b style="color: red;">*</b></label>
						<input type="text" name="matric_Number" class="form-control" value="<?php echo $row['matric_Number']; ?>">
					</div>

					<div class="form-group">
						<label>Mobile<b style="color: red;">*</b></label>
						<input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>">
					</div>

					<div class="form-group">
						<label>Email<b style="color: red;">*</b></label>
						<input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
					</div>


					<div>
						<input type="submit" name="update" value="Update" class="btn btn-light btn-radius btn-brd grd1 btn-block">
					</div>

				</fieldset>
			</div>
		</div>
	</form>
	</div>
		</div>
	</div>


    <?php include 'footer.php' ?>
</body>
</html>