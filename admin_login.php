<?php 
session_start();

ob_start();

?>
<?php include ('header.php');?>
<?php 


		if (isset($_POST['login'])) {

		$userName = $_POST['userName'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE userName = '".$userName."' AND password = '".$password."'";

		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));


		if (mysqli_num_rows($query)==1) {

		$row = mysqli_fetch_assoc($query);
     
		$_SESSION['id'] = $row['id'];
		

		header('Location: admin_page.php');

		}


		else{
			 $_SESSION['message'] = "Incorrect login details!";
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
           		 <?php
            if (isset($_SESSION['message'])): ?> 
              <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >

        <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
            </div>
            
        <?php endif ?>
				<fieldset>

						<legend style="color: darkgreen;"><b>Admin Login</b></legend>
							<div class="form-group">
								<i class="fa fa-user" aria-hidden="true" style="color: black"></i>
									<label style="color: white">User Name<b style="color: red">*</b></label>
									<input type="userName" name="userName" class="form-control" required="userName" placeholder="e.g. User1276" style="border-color: darkgreen; background: none; color: white">
							</div>
						
								<div class="form-group">
									<i class="fa fa-lock" aria-hidden="true" style="color: black"></i>
								<label style="color: white">PassWord<b style="color: red">*</b></label>
								<input type="password" name="password" class="form-control" required="password" placeholder="e.g. *******" style="border-color: darkgreen; background: none; color: white">
							</div>

               				
               				<div class="form-group">
               					
	               				<input name="login" type="submit" value="Login" class="btn btn-light btn-radius btn-brd">

	               				<button class="btn btn-light btn-radius btn-brd"><a href="index.php" style="color: white">Home</a></button>

               				 </div>

					</fieldset>
			</div>
    
		</form>
	<div class="col-md-4">
							
	</div>
</div><!-- end section -->
</div>

         

 
	

<?php include 'footer.php' ?>

</body>
</html>

