<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>GoodWEB Solutions - Responsive HTML5 Landing Page Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>


<html>
<body>
<!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__ball"></div>
        </div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    


      
    <?php 
        include ('db_connect.php');
        include('header.php'); 
   

        if(isset($_POST['submit'])) {

          $question = $_POST['question_name'];

          $sql = "INSERT INTO categories(question_name) VALUES('".$question."')";

          $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        }

    ?>
<div  data-stellar-background-ratio="0.9" style="background-image:url('uploads/parallax_04.jpg'); height: 500px; padding-bottom: 20px">
<form method="POST" style="padding-bottom: 250px; padding-top: 90px">
    <div class="container">
        <div class="col-md-3">
            
        </div>
        
         <div class="col-md-6">
            <div class="form-group">
                 <label style="font-size: 20px; color: white">Question Type</label>
                 <input type="text" name="question_name" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="background-color: darkgreen">
            </div>
        </div>

         <div class="col-md-3">
            
        </div>
    </div>
</form>
</div>



     <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script> 

        

<?php include 'footer.php' ?>
</body>
</html>
