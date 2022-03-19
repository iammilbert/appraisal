<?php

if (isset($_POST['confirm'])) {
    $student_sid = $_GET['student_sid'];
	$course_title = $_POST['course_title'];
	$course_code = $_POST['course_code'];
	$reply_complain = $_POST['reply_complain'];

$sql1 = "INSERT INTO student_complain_reply(student_sid, course_title, course_code, reply_complain) VALUES('".$student_sid."', '".$course_title."', '".$course_code."','".$reply_complain."')";

		$query1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));

			 $_SESSION['message'] = "Replied successful!" ;
    		$_SESSION['msg_type'] = "danger";

					
}


?>

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

<div id="contact" class="container-fluid wb" style="padding-top: 10px">
	<div class="section-title text-center">
        
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div class="contact_form">
        	<input type="text" name="student_sid" value="<?php echo $_GET['student_sid']; ?>">
			<form class="form">
				<p class="lead" style="color: black">Replying complain....</p>


				 <?php
                 if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>

                <a href="index.php" style="color: darkgreen;">Login here</a>
                    </div>
                    
                <?php endif ?>

		<div class="form-group">
			<label>Student Matric. Number:</label>
			<input type="text" class="form-control" name="matric_Number" value="<?php echo $row['matric_Number']; ?>">
		</div>

		<div class="form-group">
			<label>Course Title</label>
			<input type="text" class="form-control" name="course_title" value="<?php echo $row['course_title']; ?>">
		</div>

		<div class="form-group">
			<label>Course code</label>
			<input type="text" class="form-control" name="course_code" value="<?php echo $row['course_code']; ?>">
		</div>

		<div class="form-group">
			<label style="font-size: 17px; color: black">Student Complain:</label>
			<textarea name="complain_details" rows="6" class="form-control" style="color: black; border-color: darkorange"><?php echo $row['complain_details']; ?></textarea>
		</div>
		<div class="form-group">
			<label style="color: black; font-size: 17px">Comment</label>
			<textarea name="reply_complain" rows="6" class="form-control" style="color: black; border-color: darkorange" name="reply_complain"></textarea>
		</div>

		<div>
						<input type="submit" name="confirm" value="Reply" class="btn btn-light btn-radius grd1 btn-block btn-brd">
		</div>


	</form>
</div>
</div>
</div>
