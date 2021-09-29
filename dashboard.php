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
    <link rel="stylesheet" href="style1.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container" id="dashboard">
        <div class="text">Dashboard</div>
        <div class="table">
            <h3 class="shead">Your Details</h3>
            <table border="2">

                <tr>
                    <td class="ltd">Name</td>
                     <?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                                <td class="rtd" id="nf">'.$row['name'].'</td>
                                ';}
                    ?> 
                </tr>
                <tr>
                
                    <td class="ltd">Contact</td>
                    <?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                        <td class="rtd" id="cf">'.$row['phone'].'</td>
                        ';}
                        ?>
                </tr>
                <tr>

                    <td class="ltd">Email Address</td>
                    <?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                        <td class="rtd" id="ef">'.$row['email'].'</td>
                        ';}
                        ?>
                </tr>
                <tr>

                    <td class="ltd"> Address</td>
                    <?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                        <td class="rtd" id="af">'.$row['address'].'</td>
                        ';}
                        ?>
                </tr>
                <tr>

                    <td class="ltd">Youe Description </td>
                    <?php
                   
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                        <td class="rtd" id="dyf">'.$row['dy'].'</td>
                        ';}
                        ?>
                </tr>
                <tr>

                    <td class="ltd"> Facebook</td>
                    <?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                        <td class="rtd" id="ff">'.$row['fb'].'</td>
                        ';}
                        ?>
                </tr>
                <tr>

                    <td class="ltd">Instagram </td>
                    <?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                        <td class="rtd" id="if">'.$row['insta'].'</td>
                        ';}
                        ?>
                </tr>
                <tr>

                    <td class="ltd"> LinkedIN</td>
                    <?php
                   
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                        <td class="rtd" id="lf">'.$row['linked'].'</td>
                        ';}
                        ?>
                </tr>
                <tr>

                    <td class="ltd"> Objective</td>
                    <?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                        <td class="rtd" id="of">'.$row['obj'].'</td>
                        ';}
                        ?>
                </tr>
                <tr>

                    <td class="ltd" >Work Experience </td>
                    <?php
                   
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                        <td class="rtd" id="wf">'.$row['we'].'</td>
                        ';}
                        ?>
                </tr>
                <tr>

                    <td class="ltd"> Projects</td>
                    <?php
                   
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                        <td class="rtd" id="pf">'.$row['pjt'].'</td>
                        ';}
                        ?>
                </tr>
                <tr>

                    <td class="ltd"> Academic Qualification</td>
                    <?php
                    
                    include 'config2.php';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                        <td class="rtd" id="aqf">'.$row['aq'].'</td>
                        ';}
                        ?>
                </tr>
                <div class="buttons">
                    <a href="res_form.php" >
                        <button class="feyd">
                            Fill/Edit Your Details
                        </button>
                    </a>
                    <a href="logout.php">
                        <button class="feyd">
                            Logout
                        </button>
                    </a>
                    <a href="template.php" id="myButton">
                        <button  class="feyd">
                            Preview/Download
                        </button>
                    </a>
                    
                    
                </div>
                
               
                
                
            </table>
        </div>
                

    </div>
               
        
    <script src="form-template_control.js"></script>
</body>
</html>