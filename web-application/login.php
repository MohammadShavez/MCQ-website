
    <title>Quezz</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <div class="container-f">
        <div class="row bg-primary">
            <div class="col-md-2 bg-primary"><img src="img/logo.png" alt="logo" id="logo"></div>
            <div class="col-md-8 name"><span>Q</span>uezz</div>
            <div class="col-md-2"></div>
        </div>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div class="formdesine">
    <h3 class="mt-3 mb-3"><b> <i class="fa fa-user" aria-hidden="true"></i>Login</b></h3>
    <div class="md-3">
       <label for="" class="form-label">EMAIL : </label><input type="email" name="email" class="form-control">
       </div>
       <div class="md-3">
           <label for="">PASSWORD : </label><input type="password" name="password"  class="form-control">
       </div>
       <input type="submit" value="Login." name="login"class="btn btn-success resisbtn">
       If you not Resister?<a href="resister.php">click here</a> to Resister.
       <a href="forget.php">Forgot Password?</a>
</form>
</div>
<!-- 

 -->
 
 <?php
    // if(isset($_SESSION)){
    //     echo   $_SESSION['qcode'] = $_GET['exam'];
    // }
    // else{
    //  echo 'error';   //not working code
    // }
 
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = md5($_POST['password']);
        // $qcode = $_GET['exam'];
      

        include "admin/conn.php";
         $query = "SELECT Name,Email,Password from user_record Where Email = '{$email}' and Password = '{$pass}' ";
      
         $result = mysqli_query($conn,$query) or die("Query failed.");
        if(mysqli_num_rows($result)>0){
           while($data = mysqli_fetch_assoc($result)){
                    session_start();
                    if(isset($_SESSION)){
                   $_SESSION['Name'] = $data['Name'];
                  $_SESSION['Email'] = $data['Email'];
                    
                    }
                echo "<script>alert('Congratualation, You have successful login.')</script>";
                header('Refresh:0 url=quez_page/index.php');
                $msg ="";
           }
        }else{
                $msg = "<div class='alert alert-danger'>Email and password not match.</div>";
           }
       
    }
     ?>      
<?php include_once "footer.php"; ?>
<?php 

if(isset($_GET)){
     session_start();
      $_SESSION['qid'] = $_GET['exam'];
     $_SESSION['ques_code'];
}else{
        echo  "error";
    }
 
?>