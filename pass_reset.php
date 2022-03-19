<?php
session_start();

ob_start();



?>
<?php include ('lecturers_header.php'); ?>



<?php 

$errors = array();

include ('db_connect.php');
$id = $_SESSION['id'];

?>


<style type="text/css">
	ul li{
		color: black;
	}

	form{
		color: black;
	}
</style>

<div id="contact" class="container-fluid wb" style="padding-top: 180px; padding-bottom: 180px">
    <div class="col-md-4 col-md-offset-4">
        <div class="contact_form">
        	

		<form method="POST" class="form">
 
			<div class="row">
				
			<div class="form-group">
			
				<label>Your password has been reset successfully.</label>
			</div>
			
			<div class="form-group">
				<a href="lecturers_page.php" class="btn btn-light btn-radius grd1 btn-block">Continue</a>

				
			</div>
		</div>
		</form>
	</div>
</div>
</div>


    <?php include 'footer.php' ?>
</body>
</html>