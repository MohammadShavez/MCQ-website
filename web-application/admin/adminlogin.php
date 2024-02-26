<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/admin.css">

<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panal</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="container-f">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 text-center bg-primary header">ADMIN PANAL LOGIN</div>
            <div class="col-2"></div>
        </div>
            <div class="row">
              <div class="col-3"></div>
              <div class="col-6 text-center">
                      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                      <div class="formdesine">
                      <h3>Admin Login</h3>
                      <div class="md-3">
                      <label for="" class="form-label">User Id : </label><input type="email" name="user" class="form-control">
                      </div>
                      <div class="md-3">
                      <label for="" class="form-label">Password : </label><input type="password" name="password" autocomplite="off" class="form-control">
                      </div>
                      <div class="md-3">
                           <input type="submit" value="Login." name="admin_login"class="btn btn-success addbtn form-control">
                      </div>
                    </div>
                      </form>
              </div>
              <div class="col-3"></div>
            </div>


<?php   
       
       
    if(isset ($_POST['admin_login'])){
       include "conn.php";
       $email  =  $_POST['user'];
      $password = md5($_POST['password']);
      //form validation
 
      
        
    

      //close form validation
      
     $sql = "SELECT  `Email`, `Name`, `Password`, `role` FROM `user_record` WHERE Email = '{$email}' and PASSWORD = '{$password}'";
      $result = mysqli_query($conn, $sql) or die ("query failed");
      
      if(mysqli_num_rows($result)>0){ 
        
        while($row = mysqli_fetch_assoc($result)){
        
            $_SESSION['username'] = $row['Email'];
            $_SESSION['password'] = $row['Password'];
            $_SESSION['Name'] = $row['Name'];
            $_SESSION['role'] = $row['role'];
            if($_SESSION['role'] =="Admin"){
            echo "<script>alert('Hi, Welcome to the Dashboard.')</script>";
            header('Refresh:0 url=dashboard.php');
            
            
        }else{
           echo  "<script>alert('Only Admin Can login,')</script>";
        }
    }
      }else{
          
        echo "<script>alert('Error! You have Enter Details is Not Matche, Keep Try Again Later.')</script>";
        
      }
    
    }
// ?>
<?php  
    
include_once "admin_footer.php"; ?>