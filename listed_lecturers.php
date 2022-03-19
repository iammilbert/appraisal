<?php
    session_start();
    ob_start();
?>

<?php include ('header2.php');?>

<style type="text/css">
	table,th,td{
		
		color: black;

	}

</style>

<?php 
include 'db_connect.php';
		
		$id = $_SESSION['id'];
		$sql = "SELECT * FROM student_signup
				INNER JOIN schools
				ON student_signup.school_id = schools.id 
				WHERE student_signup.id = '".$id."'";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		 $row2 = mysqli_fetch_assoc($query)


?>

<?php 
		$sql3 = "SELECT * FROM lecturers_data";
		$query3 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
		 $row3 = mysqli_fetch_assoc($query3)


?>



<div class="container-fluid" style="padding-bottom: 160px; padding-top: 20px">
	<div class="col-md-10 col-md-offset-1">
	<form class="form">
		<p class="text-center" style="font-family: Gebriola; font-size: 30px; color: black"><b>LISTED LECTURERS</b></p>
<p class="text-center" style="font-family: Gebriola; font-size: 16px; color: black; padding-bottom: 10px;">Please select any of the listed lecturers to appraise by clicking on the appraise button</p>
		 <table class="table" style="font-size: 13px">

		 	<tr>
		 		<th>Id</th>
		 		<th>Title</th>
		 		<th>First Name</th>
		 		<th>Last Name</th>
		 		<th>Middle Name</th>
		 		<th>Faculty</th>
		 		<th>Department</th>
		 			
		 	</tr>

		 	<?php
		   		$no = 1;
		 		$sql="SELECT lecturers_data.id, lecturers_data.firstName, lecturers_data.lastName, lecturers_data.middleName, lecturers_data.staff_id, faculties.faculties, departments.departments, lecturers_data.gender, lecturers_data.mobile, lecturers_data.email, lecturers_data.title FROM lecturers_data

							INNER JOIN schools
                            ON lecturers_data.school_id = schools.id

                            INNER JOIN faculties
                            ON lecturers_data.faculty_id = faculties.id

                            INNER JOIN departments
                            ON lecturers_data.department_id = departments.id

							WHERE lecturers_data.school_id = '".$row2['school_id']."' AND lecturers_data.department_id = '".$row2['department_id']."'"; 

		 		 	$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		 			while ($row = mysqli_fetch_assoc($query)) {
		 				

		 		?>
		 			<tr>
		 				<td ><?php echo $no; ?></td>
		 				<td><?php echo $row['title']; ?></td>
		 				<td><?php echo $row['firstName']; ?></td>
		 				<td><?php echo $row['lastName']; ?></td>
		 				<td><?php echo $row['middleName']; ?></td>
		 				<td><?php echo $row['faculties']; ?></td>
		 				<td><?php echo $row['departments']; ?></td>

		 				<td ><a href="view_questionaire.php?id=<?php echo $row['id']; ?>" class='btn btn-sm btn-danger'><i class='fa fa-uncheck'></i>Appraise</a></td>
		 		

		 			</tr>

		 		<?php
		 		$no++;
		 			
		 			}
		 
		 		?>
		
 			</table>
		 </div>
	  </form>
 	</div>
</div>
	


    <?php include 'footer.php' ?>   

</body>
</html>