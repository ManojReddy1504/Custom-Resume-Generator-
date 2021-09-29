<?php
error_reporting(0);
include 'config.php';
session_start();

if(!isset($_SESSION["user_id"])){
    header("LOCATION: index.php");
  }

if(isset($_REQUEST['submit'])){
    $name= $_REQUEST['name'];
    $phone= $_REQUEST['phone'];
    $email2= $_REQUEST['email2'];
    $address= $_REQUEST['address'];
    $dy= $_REQUEST['dy'];
    $fb= $_REQUEST['fb'];
    $insta= $_REQUEST['insta'];
    $linked= $_REQUEST['linked'];
    $obj= $_REQUEST['obj'];
    $we= $_REQUEST['we'];
    $pjt= $_REQUEST['pjt'];
    $aq= $_REQUEST['aq'];
    $query= "INSERT INTO content ( name, phone, email2, address, dy, fb, insta, linked, obj, we, pjt, aq) VALUES ('$name', '$phone', '$email2', '$address', '$dy', '$fb', '$insta', '$linked', '$obj', '$we', '$pjt', '$aq')";
    $result= mysqli_query($conn,$query);
    if($result){
        
        echo "<script>alert('deatails submitted.');</script>";
        header("LOCATION: dashboard.php");
        
    }
    
    else{
       echo "<script>alert('details submission unsuccessfull');</script>";
        
    }
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
    <title>Form</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style1.css">
</head>
    <body>
        <!--Form-->
        <div class="container" id="form">
            <div class="text">Your Details</div><!--Form Heading-->

                <form action="#"  >
                    <h3 class="stext">Personal details</h3>
                    <div class="form-row">
                        <!--Name-->
                        <div class="input-data">
                            <input type="text" placeholder="Enter Here" id="nameField" class="form-control" name="name">
                            <label for="nameField">Your Name</label>
                        </div>
                        <!--Contact-->
                        <div class="input-data">
                            <input type="text" placeholder="Enter Here" id="contactField" class="form-control" name="phone">
                            <label>Contact Number</label>
                        </div>
                        <!--Email-->
                        <div class="input-data">
                            <input type="text" placeholder="Enter Here" id="emailField" class="form-control" name="email2">
                            <label>Email Address</label>
                        </div>
                    
                    </div>
                    <div class="form-row textarea">
                        <!--Address-->
                        <div class="input-data">
                            <textarea placeholder="Enter Here" id="addressField" cols="30" rows="5" class="form-control" name="address"></textarea>
                            <label>Your Address</label>
                        </div>
                        <!--Description-->
                        <div class="input-data">
                            <textarea placeholder="Enter Here" id="descriptionField" cols="30" rows="5" class="form-control" name="dy"></textarea>
                            <label>Describe Yourself In One Sentence</label>
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <!--Facebook-->
                        <div class="input-data">
                            <input type="text" placeholder="Enter Here" id="fbField" class="form-control" name="fb">
                            <label>Facebook</label>
                        </div>
                        <!--Instgram-->
                        <div class="input-data">
                            <input type="text" placeholder="Enter Here" id="instaField" class="form-control" name="insta">
                            <label>Instagram</label>
                        </div>
                        <!--Linkedin-->
                        <div class="input-data">
                            <input type="text" placeholder="Enter Here" id="linkedField" class="form-control" name="linked">
                            <label>LinkedIn</label>
                        </div>
                    </div>
                    <h3 class="stext">Professional Details</h3>
                    <div class="form=row textarea">
                        <!--Objective-->
                        <div class="input-data">
                            <label>Objective</label>
                            <textarea placeholder="Enter Here" class="form-control" id="objField" cols="30" rows="5" name="obj"></textarea>
                            
                        </div>
                        <!--Work Experience-->
                        <div class="input-data" id="we">
                            <label for="weField">Work Experience</label>
                            <textarea placeholder="Use Numbering/Bullets for multiple entries(Example 1.Work Experience-1 or > Work Experience-2)" class="form-control weField" cols="30" rows="5" name="we"></textarea>
                            
                        </div>
                        <!--Projects-->
                        <div class="input-data" id="pjt">
                            <label for="pjtField">Projects</label>
                            <textarea placeholder="Use Numbering/Bullets for multiple entries(Example 1.Projecr-1 or > Project-2)" class="form-control pjtField" cols="30" rows="5" name="pjt"></textarea>
                            
                            
                        </div>
                        <!--Academic Qualification-->
                        <div class="input-data" id="aq">
                            <label for="aqField">Academic Qualifications</label>
                            <textarea placeholder="Use Numbering/Bullets for multiple entries(Example 1.10th- With 90% marks(School, Board) or 
                            > 12th- With 90% marks(School/College, Board)" class="form-control aqField" cols="30" rows="5" name="aq"></textarea>
                            
                            
                        </div>
                        <div>
                            
                            <button class="pdButton" name="submit">
                                Submit Your Details
                            </button>
                            
                        </div>
                       
                    </div>

                </form>
                <a href="dashboard.php" class="dButton">Dashboard</a>
            
        </div>
        <!--Form End-->
              

    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>         
        <script src="form-template_control.js"></script>
       
    </body>
</html>