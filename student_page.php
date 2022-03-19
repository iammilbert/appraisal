<?php
session_start();

ob_start();
?>
<?php include ('header2.php');?>

   
   
    <div class="container-fluid" data-stellar-background-ratio="0.9" style="background-image:url('uploads/parallax_04.jpg'); padding-top: 200px; padding-bottom: 190px">
        <div class="container">
            <div class="row text-center stat-wrap">
                
                <div class="col-md-3">

                </div><!-- end col -->

                <div class="col-md-3">
                    <a href="Complaint_form.php"> <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-briefcase"></i></span></a>
                    <p></p>
                    <h3>Submit Complain</h3>
                </div><!-- end col -->

                <div class="col-md-3">
                    <a href="listed_lecturers.php"> <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-happy"></i></span></a>
                   <p></p>
                    <h3>Listed Lecturers</h3>
                </div><!-- end col -->

                <div class="col-md-3">
                   
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


  
    <?php include 'footer.php' ?>    

    </body>
</html>