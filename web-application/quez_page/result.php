<?php session_start();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quezz</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
  
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container-f">
        <div class="row bg-primary">
            <div class="col-md-2 bg-primary"><img src="../img/logo.png" alt="logo" id="logo"></div>
            <div class="col-md-8 name"><span>Q</span>uezz</div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="resultbox">
                    <h2 class="text-info h1 text-center mb-3">Your Result.</h2>
                   <div class="text-info h2 text-center"> <b>Name : </b> <?php echo $_SESSION['Name'] ;?></div>
                   <div class="text-dark h2 text-center">
                   <b>Total Question : </b><?php// echo $_SESSION['total_questions'] ; ?>10
                   </div>
                   <div class="text-danger h2 text-center">
                   <b>Total Attemp Question : </b> <?php echo  $_SESSION['attemp']+1; ?>
                   </div>
                   
                   <div class="text-success h2 text-center">
                   <b>Your Score : </b><?php echo $_SESSION['score'];?>
                   </div>
                       
                   <div class="text-warning h2 text-center">
                   <b>You Have: </b><?php 
                   if($_SESSION['score']==10){
                        echo "Excelent";
                   }elseif($_SESSION['score']>=7){
                       echo "GOOD";
                   }
                   elseif($_SESSION['score']>=5){
                    echo "PASS";
                   }
                   else{
                       echo "FAIL";
                   }
                   ?>
             </div>

                </div>
                <a href="../stard_categary/start.php"><button class="btn btn-info text-center mt-3">Try Again</button></a>
            </div>

            
                
            <div class="col-md-3">

        </div>
            </div>
            <?php
             if(!isset($_SESSION['Name'])){
                header ("location:../login.php");
            } else{
                session_unset();
            }
          
                header ("Refresh:60; url=../login.php");
            ?>