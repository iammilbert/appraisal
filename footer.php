<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
<?php

if (isset($_POST['newsletter'])) {
         
            $email = $_POST['email'];
         
          
        
            $sql = "INSERT INTO subscribers(email) VALUES('".$email."')";

            $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

             $_SESSION['message'] = "Successful!" ;
            $_SESSION['msg_type'] = "danger";

                    
            }
        

    ?>

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                            <p style="color: darkorange; font-size: 22px; font-family: Tahoma"><b>ONLINE APPRAISAL SYSTEM</b></p><br>
                        <p>Annual performance appraisals enable management gauge and monitor whether institutional standards, expectations and objectives, and delegation of responsibilities and tasks are achieved. Staff performance appraisals also establish individual training needs and enable institution to identify training needs analysis and planning.</p>
                        
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Pages</h3>
                        </div>

                        <ul class="footer-links hov">
                            <li><a href="index.php">Home <span class="icon icon-arrow-right2"></span></a></li>
                            <li><a href="index.php">Blog <span class="icon icon-arrow-right2"></span></a></li>
                            <li><a href="about.php">About <span class="icon icon-arrow-right2"></span></a></li>
                             <li><a href="login.php">Login <span class="icon icon-arrow-right2"></span></a></li>
                            <li><a href="contact.php">Contact <span class="icon icon-arrow-right2"></span></a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
                
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-distributed widget clearfix">
                        <div class="widget-title">
                            <h3>Subscribe</h3>
                            <p>When you subcribe to our newsletter, you will get notify when ever the lecturers are up for evalutation. </p>
                        </div>
                        
                        <div class="footer-right">
                                      <?php
                 if (isset($_SESSION['message'])): ?> 
                <div style="font-size: 20px;" class="aler alert-<?=$_SESSION['msg_type']?>" >
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
                    
                <?php endif ?>
                            <form method="POST" >
                      
                                <div class="form-group">
                                <input placeholder="Subscribe our newsletter.." name="email">
                                <i class="fa fa-envelope-o"></i>
                                <input type="submit" name="newsletter" value="Subcribe" class="btn btn-light btn-radius grd1 btn-block" style="background-color: darkorange; color: black">
                                </div>
                            </form>
                        </div>                        
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div style="text-align: center; color: darkorange; height: 10px">
            
                
                    <p class="footer-company-name">All Rights Reserved. &copy; 2019 Appraisal System<br> Design By : Mikesung NextWave</p>
        </div><!-- end container -->
    </div>


</html>