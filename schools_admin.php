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
include 'db_connect.php';
?>



<?php 


if (isset($_GET['delete'])) {
	$id = $_GET['delete'];

		$sql2 = "SELECT * FROM admin
				INNER JOIN schools
				ON admin.school_id = schools.id 
				WHERE admin.id = '".$id."'";

		$query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
		 $row2 = mysqli_fetch_assoc($query2);

		 if (mysqli_num_rows($query2)>0) {

            $id = $_GET['delete'];
            $sql1 = "DELETE FROM admin WHERE admin.id = '".$id."'";
            $query1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));

             $_SESSION['message'] = "Record has been deleted!";
            $_SESSION['msg_type'] = "danger";
         
		}
	}
           
     ?>




<div class="container-fluid" style="padding-bottom: 160px; padding-top: 20px">
		<div class="col-md-10 col-md-offset-1">
			<form class="form">
				<div class="row">
				 <p class="text-center" style="font-family: Gebriola; font-size: 30px; color: black"><b>REGISTERED SCHOOLS ADMIN</b></p>

				 	 <?php
                 if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>

               
                    </div>
                    
                <?php endif ?>

		 		<div class="text-right">
		 		<td><a href="#" class='btn btn-primary' onclick="javascript:window.print()" /><i class='fa fa-print'></i> Print</a></td>
		 		</div>
		 		<p></p>
		 		<table class="table" style="font-size: 13px">

		 			<tr>
		 				<th>S/N</th>
		 				<th>First Name</th>
		 				<th>Last Name</th>
		 				<th>Middle Name</th>
		 				<th>Gender</th>
		 				<th>UserName</th>
		 				<th>school Name</th>
		 				<th>Mobile</th>
		 				<th>email</th>
		 				<th>Password</th>		
		 			</tr>

		 			<?php
		 			$no=1;
		 		
		 				
		 			$sql="SELECT admin.id, admin.firstName, admin.lastName, admin.middleName, admin.userName, admin.gender, admin.mobile, admin.email, admin.password, schools.schoolNames FROM admin

						INNER JOIN schools
						ON admin.school_id = schools.id";

		 			$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		 		

		 		while ($row = mysqli_fetch_assoc($query)) {
		 				

		 			?>
		 			<tr>

		 				<td><?php echo $no; ?></td>
		 				<td><?php echo $row['firstName']; ?></td>
		 				<td><?php echo $row['lastName']; ?></td>
		 				<td><?php echo $row['middleName']; ?></td>
		 				<td><?php echo $row['gender']; ?></td>	
		 				<td><?php echo $row['userName']; ?></td>
		 				<td><?php echo $row['schoolNames']; ?></td>
		 				<td><?php echo $row['mobile']; ?></td>
		 				<td><?php echo $row['email']; ?></td>
		 				<td><?php echo $row['password']; ?></td>

		 			
		 				<td><a href="ga_edit_admin.php?id=<?php echo $row['id']; ?>" class='btn btn-sm btn-primary' name="edit" ><i class='fa fa-edit'></i></a></td>

		 				<td><a href="schools_admin.php?delete=<?php echo $row['id']; ?>" class='btn btn-sm btn-danger' name="delete" ><i class='fa fa-trash'></i></a></td>

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