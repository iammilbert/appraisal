<?php
session_start();

ob_start();
?>

<?php include ('lecturers_header.php'); ?>
    
    



<style type="text/css">
	table,th,td{
		border:1px solid black;
		
		color: black;

	}

</style>

<?php 
    include('db_connect.php');      
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM lecturers_data 
    				INNER JOIN final_result
    				ON lecturers_data.id = final_result.staff_sid
    				WHERE lecturers_data.id='".$id."'";
    $query = mysqli_query($conn, $sql);
   
    if (mysqli_num_rows($query)==1) {

		$row = mysqli_fetch_assoc($query);

		}else{
			header('Location: no_result.php');
		
		}
    
?>


<div id="contact" class="section wb">
   <div class="col-md-8 col-md-offset-2"  style="background-color: darkgrey">
      <div class="contact_form">
      	<form class="form">
				<input type="hidden" name="staff_sid" value="<?php echo $_SESSION['id']; ?>">
			<div class="row">
				<div class="section-title text-center">
			 		<img src="images/ap_logo.PNG"  style="width: 90px; height: 80px">
			 	
        			<h3 style="font-size: 17px; font-family: Tahoma"><b style="font-size: 22px;">ONLINE APPRAISAL SYSTEM</b><br>Staff Performance Result Sheet (SPRS)</h3>
        		</div>
				
				<fieldset">
					<table class="table">	 
						<tr>
							<th>Motivation:</th>
							<td><?php echo $row['motivation']; ?>%</td>
							<th>Management:</th>
							<td><?php echo $row['management']; ?>%</td>
							
						</tr>

						<tr>
							<th>Puntuality:</th>
							<td><?php echo $row['puntuality']; ?>%</td>
							<th>Instruction/Curriculum:</th>
							<td><?php echo $row['instruction_curriculum']; ?>%</td>			
						</tr>
					
					</table>

					
					<div class="form-group">
						<label style="color: black"><u>REMARK:</u></label><br>
						<label style="color: black"><?php echo  $row['remark']; ?></label>
					</div>


					<div class="text-right">
			 			<a href="#" class='btn btn-light btn-brd'><i class='fa fa-print'></i></a><br>
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