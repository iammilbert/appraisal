<?php 
    session_start();

    ob_start();
?>

	<?php include 'header.php' ?>



<?php 
	
	
	
	if (isset($_POST['login'])) {
		$staff_id = $_POST['staff_id'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM lecturers_data WHERE staff_id = '".$staff_id."' AND password = '".$password."'";

		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		

		if (mysqli_num_rows($query)==1) {

		$row = mysqli_fetch_assoc($query);

		$_SESSION['id'] = $row['id'];

		header('Location: lecturers_page.php');
		}
		
		else{
			$_SESSION['message'] = "Incorrect Login details!";
            $_SESSION['msg_type'] = "warning";
		}
	}

?>



<div class="banner-area banner-bg-1">
	<div class="container-fluid">
			<div class="col-md-4">
		
			</div>
      	<form method="POST">
           	<div class="col-md-4">
				<fieldset>
					<legend style="color: darkgreen;"><b>Lecturer(s) Login</b></legend>

					<?php
           		 if (isset($_SESSION['message'])): ?> 
              	<div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >

		        <?php 
		            echo $_SESSION['message'];
		            unset($_SESSION['message']);
		        ?>
		            </div>
		            
		        <?php endif ?>

		        
							<div class="form-group">
								<i class="fa fa-user" aria-hidden="true" style="color: black"></i>
									<label style="color: white">Staff ID</label>
									<input type="regNumber" name="staff_id" class="form-control" required="password" placeholder="e.g. ID1276" style="border-color: darkgreen; background: none; color: black">
							</div>
						
							<div class="form-group">
								<i class="fa fa-lock" aria-hidden="true" style="color: black"></i>
								<label style="color: white">Password</label>
								<input type="password" name="password" class="form-control" required="password" placeholder="e.g. *******" style="border-color: darkgreen; background: none; color: white">

							<div class="form-group" style="padding-bottom: 20px; padding-top: 15px">
	               				<input name="login" type="submit" value="Login" class="btn btn-light btn-radius btn-brd">

	               				<a href="index.php" style="color: white" class="btn btn-light btn-radius btn-brd">Home</a>

               				 </div>

               				  <p style="color: white">Forgot password?<a href="forgot_password.php" style="color: green"> click here</a>
                                </p>

					</fieldset>
			</div>
		</form>
		<div class="col-md-4">
							
		</div>
	</div>
</div>





<?php include 'footer.php' ?>

</body>
</html>