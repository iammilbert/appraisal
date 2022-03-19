<?php 
    session_start();

    ob_start();
?>

<?php include ('admin_header.php'); ?>
   
 

 
   
    <?php include ('db_connect.php');
   

            if (isset($_POST['submit'])) {

              $cat_id = $_POST['cat_id'];
              $name = $_POST['name'];
             

              $sql = "INSERT INTO questionaire(cat_id, name) VALUES('".$cat_id."', '".$name."')";

              $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            }

            ?>


<div data-stellar-background-ratio="0.9" style="background-image:url('uploads/parallax_04.jpg');" >
    <div class="container-fluid" style="padding-top: 200px; padding-bottom: 200px">
        <div class="col-md-8 col-md-offset-2">
            <div class="row text-center stat-wrap">
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <a href="motivation_questions.php"> <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-customer-service"></i></span></a>
                    <h3>MOTIVATION</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                 <a href="management_questions.php"> <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-customer-service"></i></span></a>
                    <h3>MANAGEMENT</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                  <a href="puntuality_questions.php"> <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-customer-service"></i></span></a>
                    <h3>PUNTUALITY</h3>
                </div><!-- end col -->
                
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="instruction_curriculum_questions.php"> <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-customer-service"></i></span></a>
                    <h3>INSTRUCTION/CURRICULUM</h3>
                </div><!-- end col -->
                
            </div><!-- end row -->
        </div><!-- end container -->
</div>
</div>



     

        

<?php include 'footer.php' ?>
</body>
</html>
