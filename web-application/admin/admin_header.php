<?php  session_start(); 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panal</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/admin.css">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container-f">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-7 text-center bg-primary header">ADMIN PANAL</div>
            <div class="col-3">
                <div class="profile">
                
                <h3 class="prop-style">Name :  <?php echo $_SESSION['Name'];?></h3>
                <p> User Id : <?php  echo $_SESSION['username']; ?></p>
                <a href="admnlogout.php"><button class="btn btn-success">LOGOUT</button></a>
                </div>
            </div>
        </div>
        <div class="row bg-dark">
            
        <div class=" nav ">
                    <li class="nav-item">
                        <a class="nav-link text-light " href="dashboard.php"> USER DATA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="add_question.php">ADD QUESTION</i></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-light" href="allquestion.php">All QUESTION MIX</i></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="showcategary.php">Show Categary Wise Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="question_code_add.php">Question Code Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="adcategary.php">Add Categary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="feedback.php">Feedback</a>
                    </li>
                    
                </div>
        </div>
        <?php 
    if(!isset( $_SESSION['username'])){
    header("Location: adminlogin.php");
    }
?>