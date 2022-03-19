<?php 
    session_start();
    ob_start();
?>

<?php include ('admin_header.php'); ?>


<style type="text/css">
	table,th,td{
		
        color: black;

	}

 
	 @media print{
    	.btn-sm{
    		display: none;
    	}

    	.footer{
    		display: none;
    	}

    	.btn-primary{
    		display: none;
    	}

    	.copyrights{
    		display: none;
    	}
    }
</style>



<?php 
include 'db_connect.php';
		
		$id = $_SESSION['id'];
		$sql2 = "SELECT * FROM admin
				INNER JOIN schools
				ON admin.school_id = schools.id 
				WHERE admin.id = '".$id."'";
		$query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
		 $row2 = mysqli_fetch_assoc($query2);


?>

<div class="container-fluid" style="padding-bottom: 160px; padding-top: 20px; background-color: darkgrey">
		<div class="col-md-8 col-md-offset-2">
			<form class="form">
				<div class="row">
				 <p class="text-center" style="font-family: Gebriola; font-size: 30px; color: black"><b>STUDENTS COMPLAINS</b></p>

		 		<table class="table" style="font-size: 13px">

		 				<tr>
		 					<td><b>S/No</b></td>
		 					<td><b>Student Reg. Number</b></td>
		 					<td><b>Compalin Type</b></td>
		 					<td><b>Lecturer Name</b></td>
		 					<td><b>Lecturer Department</b></td>
		 					<td><b>Course Code</b></td>
		 					<td><b>complain Details</b></td>
		 					
		 				</tr>

		 				<?php
		 					$no = 1;

		 					
		 					$sql="SELECT student_complain.student_sid, student_complain.complain_details, student_complain.lecturer_Name, student_complain.complain_type, student_complain.course_code, departments.departments, student_signup.matric_Number FROM student_complain 

		 					INNER JOIN student_signup 
		 						ON student_signup.id = student_complain.student_sid

		 					INNER JOIN departments 
		 						ON student_complain.lecturer_department = departments.id

		 				WHERE student_signup.school_id = '".$row2['school_id']."'";

		 				$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		 				while ($row = mysqli_fetch_assoc($query)) {
		 				

		 				?>
		 				<tr>
		 					<td><?php echo $no ; ?></td>
		 					<td><?php echo $row['matric_Number']; ?></td>
		 					<td><?php echo $row['complain_type']; ?></td>
		 					<td><?php echo $row['lecturer_Name']; ?></td>
		 					<td><?php echo $row['departments']; ?></td>
		 					<td><?php echo $row['course_code']; ?></td>
		 					<td><?php echo $row['complain_details']; ?></td>

		 				

		 					<td><a href="#" class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a></td>
		 				</tr>

		 				<?php
		 					$no++;
		 				}
		 				?>
		 			</table>

		 			<div class="text-right">
			 			<td><a href="#" class='btn btn-primary' onclick="javascript:window.print()" /><i class='fa fa-print'></i> Print</a></td>
			 		</div>
			 	
		 </div>
	  </form>
 	</div>
</div>
	

    <?php include 'footer.php' ?>  

</body>
</html>