<?php
error_reporting(0);
include 'config.php';
session_start();

if(!isset($_SESSION["user_id"])){
    header("LOCATION: index.php");
}
else{
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
        <div class="container template" >
              <!-- Left Side Of The Template Personal Information -->
            <div class="left" id="l">
                <div class="personal_info">
                    <!--Image-->
                    <div class="imgBx">
                        <img src="2.jpg">
                    </div>
                    <!--Name-->
                    <h2 id="nameT"><?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                '.$row['name'].'
                                ';}
                    ?><br></h2>

                </div>
                    
                <!--Contact Information-->
                <div class="contact_info">
                    <h3 class="title">Contact Info</h3>
                    <ul>
                        <li><!--Phone Number-->
                            <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <span class="text1" id="contactT"><?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                '.$row['phone'].'
                                ';}
                    ?></span>
                        </li>
                        <li><!--Email Address-->
                            <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                            <span class="text1" id="emailT"><?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                '.$row['email'].'
                                ';}
                    ?></span>
                        </li>
                        <li><!--Facebook-->
                            <span class="icon"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
                            <span class="text1" id="fbT"><?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                '.$row['fb'].'
                                ';}
                    ?></span>
                        </li>
                        <li><!--Instagram-->
                            <span class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                            <span class="text1" id="instaT"><?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                '.$row['insta'].'
                                ';}
                    ?></span>
                        </li>
                        <li><!--Linledin-->
                            <span class="icon"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span>
                            <span class="text1" id="linkedT"><?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                '.$row['linked'].'
                                ';}
                    ?></span>
                        </li>
                        <li><!--Address-->
                            <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <span class="text1" id="addT"><?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                '.$row['address'].'
                                ';}
                    ?></span>
                        </li>
                    </ul>
                </div>
                
                
            </div>
             <!-- Right Side Of The Template-->
            <div class="right" id="r">
                <div class="card-header background">
                    <h3>About Myself</h3>  
                </div>
                <div class="card-body">
                      <p id="amT"><?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                '.$row['dy'].'
                                ';}
                    ?></p>
                </div>
                <!--Objective-->
                <div class="card-header background">
                    <h3>Objective</h3>  
                </div>
                <div class="card-body">
                      <p id="objT"><?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                '.$row['obj'].'
                                ';}
                    ?></p>
                </div>
                <!--Work Experience-->  
                <div class="card-header background">
                    <h3>Work Experiences</h3>  
                </div>
                <div class="card-body">
                        <ul id="weT">
                        <?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                '.$row['we'].'
                                ';}
                    ?>
                            
                        </ul>
                </div>
                <!--Projects--> 
                <div class="card-header background">
                    <h3>Projects</h3>  
                  </div>
                  <div class="card-body">
                      <ul id="pjtT">
                      <?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                '.$row['pjt'].'
                                ';}
                    ?>
                          
                      </ul>
                  </div> 
                <!--Academic Qualification-->
                 <div class="card-header background">
                    <h3>Academic Qualification</h3>  
                 </div>
                 <div class="card-body">
                      <ul id="aqT">
                      <?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                '.$row['aq'].'
                                ';}
                    ?>
                          
                      </ul>
                 </div>  

            </div>
            <div>
                <button onclick="print_cv()"  class="pdButton">
                    Print/Download
                </button>
                <a href="dashboard.php" class="dButton">Dashboard</a>
        </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>         
        <script src="form-template_control.js"></script>
</body>
</html>