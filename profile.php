<?php
session_start();

ob_start();
?>

<?php include ('header2.php'); ?>
    
    

<?php 
    include('db_connect.php');      
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM student_signup 

    		INNER JOIN schools
    		ON student_signup.school_id = schools.id

    		INNER JOIN faculties
    		ON student_signup.faculty_id = faculties.id

    		INNER JOIN departments
    		ON student_signup.department_id = departments.id

    		INNER JOIN courses
    		ON student_signup.course_id = courses.id

    		WHERE student_signup.id='".$id."'";

		    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		    $row = mysqli_fetch_assoc($query);
    
?>

<style type="text/css">
	table,th,td{
	
		font-size: 13px;
		color: black;

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
							<li><a href="change_password.php">Change Password</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="contact" class="section wb">
         <div class="col-md-8 col-md-offset-2"  style="background-color: darkgrey">
              <div class="contact_form">

	<form class="form">
		<div class="row">
			
			<div class="text-right">
			 	<td><a href="#" class='btn btn-primary' onclick="javascript:window.print()" /><i class='fa fa-print'></i> Print</a></td>
			 	</div>
			 <div class="section-title text-center">
			 	<img src="images/ap_logo.PNG"  style="width: 90px; height: 80px">
			 	
        		<h3 style="font-size: 17px; font-family: Tahoma"><b style="font-size: 22px;">ONLINE APPRAISAL SYSTEM</b><br>Student Information System (SIF)</h3>
        			    
    		</div>
				<fieldset">
					<table class="table">
					
						<tr>
							<th>First Name:</th>
							<td><?php echo $row['firstName']; ?></td>
							<th>Last Name:</th>
							<td><?php echo $row['lastName']; ?></td>
						</tr>

						<tr>
							<th>Middle Name:</th>
							<td><?php echo $row['middleName']; ?></td>
							<th>Gender:</th>
							<td><?php echo $row['gender']; ?></td>
						</tr>

						<tr>
							<th>Institution:</th>
							<td><?php echo  $row['schoolNames']; ?></td>
							<th>Faculty:</th>
							<td><?php echo $row['faculties']; ?></td>
						</tr>

							<tr>
							<th>Department:</th>
							<td><?php echo $row['departments']; ?></td>
							<th>course Of Study:</th>
							<td><?php echo $row['courses']; ?></td>
							
						</tr>

						<tr>
							<th>Reg. Number:</th>
							<td><?php echo $row['matric_Number']; ?></td>
							<th>Email:</th>
							<td><?php echo $row['email']; ?></td>
							
						</tr>

						<tr>
							<th>Mobile:</th>
							<td><?php echo  $row['mobile']; ?></td>
							<th>Appointment:</th>
							<td>NILL</td>
						</tr>
					</table>


					<div>

						<a href="edit_student.php?id=<?php echo $row['id']; ?>" name="edit" class="btn btn-light btn-radius grd1 btn-block">Edit Profile</a>

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