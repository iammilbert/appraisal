<?php
session_start();

ob_start();
?>
<?php include ('lecturers_header.php');?>

   
   
    <div class="slider-area">
        <div class="slider-wrapper owl-carousel">
            <div class="slider-item text-left home-one-slider-otem slider-item-four slider-bg-two">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="slide-text">
 <?php 
    include('db_connect.php');      
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM lecturers_data 
            INNER JOIN schools
            ON lecturers_data.school_id = schools.id

            INNER JOIN faculties
            ON lecturers_data.faculty_id = faculties.id

            INNER JOIN departments
            ON lecturers_data.department_id = departments.id

            WHERE lecturers_data.id='".$id."'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($query);
    
?>

                                <h1 class="homepage-three-title">Welcome, <?php echo $row['title']; ?> <span><?php echo $row['lastName']; ?></h1>
                                <h2>Please kindly click on the check result button below to check your<br> peroformance appraisal result. </h2>
                                <div class="slider-content-btn">
                                    <a class="button btn btn-light btn-radius btn-brd" href="view_performance.php">Check Result</a>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>


  
    <?php include 'footer.php' ?>    

    </body>
</html>