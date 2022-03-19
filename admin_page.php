<?php 
    session_start();

    ob_start();
?>

<?php include ('admin_header.php'); ?>


<?php 
include 'db_connect.php';
        
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM admin
                INNER JOIN schools
                ON admin.school_id = schools.id 
                WHERE admin.id = '".$id."'";
        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $row2 = mysqli_fetch_assoc($query)


?>

    
   
	<div class="container-fluid"  data-stellar-background-ratio="0.9" style="background-image:url('uploads/parallax_04.jpg')">
        <div class="container">
            <div class="row text-center stat-wrap" style="padding-top: 200px; padding-bottom: 152px">

                <div class="col-md-3 col-sm-6 col-xs-12">
                   <a href="lecturers_data.php"> <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-idea"></i></span></a>
                   <?php 
                   
                        $sql = "SELECT COUNT(lecturers_data.id) AS sum FROM lecturers_data

                        INNER JOIN schools
                            ON lecturers_data.school_id = schools.id

                            WHERE lecturers_data.school_id = '".$row2['school_id']."'";

                        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                   ?>

                   <?php while ($id_row = mysqli_fetch_assoc($query)): ?> 
                      
                  
                    <p class="stat_count"><?php echo  $id_row['sum']; ?></p>
                    <?php endwhile ?>
                    <h3>Add Lecturer</h3>
                </div><!-- end col -->
                
            

                <div class="col-md-3 col-sm-6 col-xs-12">

                	<a href="appraisal_summary_page.php"> <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-briefcase"></i></span></a>

                    <?php 
                        $sql = "SELECT COUNT(mgt_answer.staff_id) AS sum FROM mgt_answer

                        INNER JOIN lecturers_data
                            ON mgt_answer.staff_id = lecturers_data.id

                            WHERE lecturers_data.school_id = '".$row2['school_id']."'";

                        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                   ?>

                   <?php while ($id_row = mysqli_fetch_assoc($query)): ?> 
                      
                  
                    <p class="stat_count"><?php echo  $id_row['sum']; ?></p>
                    <?php endwhile ?>
                    <h3>Appraised Lecturers</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                	<a href="processed_result.php"> <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-happy"></i></span></a>

                    <?php 
                        $sql = "SELECT COUNT(final_result.staff_sid) AS sum FROM final_result
                        INNER JOIN lecturers_data
                            ON lecturers_data.id = final_result.staff_sid
                             WHERE lecturers_data.school_id = '".$row2['school_id']."'";

                        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                   ?>

                   <?php while ($id_row = mysqli_fetch_assoc($query)): ?> 
                      
                  
                    <p class="stat_count"><?php echo  $id_row['sum']; ?></p>
                    <?php endwhile ?>
                    <h3>Processed Results</h3>
                </div><!-- end col -->
                
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="questions.php"> <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-customer-service"></i></span></a>
                    <p class="stat_count">20</p>
                    <h3>Add/Edit Questions</h3>
                </div><!-- end col -->
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->




 
    <?php include 'footer.php' ?>   

</body>
</html>