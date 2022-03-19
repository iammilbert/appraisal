<?php 
    session_start();
    ob_start();
?>

<?php include ('general_admin_header.php'); ?>


<style type="text/css">
	table,th,td{
		
        color: black;

	}

</style>



<?php 

include ('db_connect.php');

?>

<div class="container-fluid" style="padding-bottom: 160px; padding-top: 20px; background-color: darkgrey">
		<div class="col-md-8 col-md-offset-2">
			<form class="form">
				<div class="row">
				 <p class="text-center" style="font-family: Gebriola; font-size: 30px; color: black"><b>NEWS LETTERS SUBSCRIBERS LIST</b></p>

		 		<table class="table" style="font-size: 13px">

		 				<tr>
		 					<td><b>S/No</b></td>
		 					<td><b>Email</b></td>
		 					
		 					
		 				</tr>

		 				<?php
		 					$no = 1;

		 					
		 					$sql="SELECT * FROM subscribers";

		 				$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		 				while ($row = mysqli_fetch_assoc($query)) {
		 				

		 				?>
		 				<tr>
		 					<td><?php echo $row['id'] ; ?></td>
		 					<td><?php echo $row['email']; ?></td>

		 					<td><a href="#" class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a></td>
		 				</tr>

		 				<?php
		 					$no++;
		 				}
		 				?>
		 			</table>

		 			
			 	<div>
						<input type="submit" name="confirm" value="Send News" class="btn btn-light btn-radius grd1 btn-block btn-brd">
					</div>
		 </div>
	  </form>
 	</div>
</div>
	

    <?php include 'footer.php' ?>  

</body>
</html>