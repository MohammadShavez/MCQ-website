<?php include_once "hedder.php" ?>
<!--  -->
<?php
if(isset($_POST['resetpass'])){
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['conf-password']);

     include "admin/conn.php";

     $query = "SELECT Email,Password from user_record Where Email = '$email'";
     
     $result = mysqli_query($conn,$query) or die("Query faiaaaaaled.");
     if(mysqli_num_rows($result)>0){
        $query2 = "UPDATE user_record SET  Password = '$cpass' where Email = '$email' ";
        $result2 = mysqli_query($conn,$query2) or die("Query failed.");
       
         $mass ="<div class='alert alert-success'>Password Forgett.</div>";
     }else{
        $mass ="<div class='alert alert-danger'>user Invalid.</div>";
     }
}
else{
          $mass ="";
        }
   

?>

<!--  -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div class="formdesine">
    <h3>Forget Password</h3>
    <?php echo $mass; ?>
    <div class="md-3">
       <label for="" class="form-label">EMAIL : </label><input type="email" name="email" class="form-control">
       </div>
       
       <div class="md-3">
           <label for="">NEw PASSWORD : </label><input type="password" name="password" autocomplite="off" class="form-control">
       </div>
       <div class="md-3">
           <label for="">CONFERM PASSWORD : </label><input type="password" name="conf-password" autocomplite="off" class="form-control">
       </div>
       <input type="submit" value="Reset Password." name="resetpass"class="btn btn-success resisbtn">
      
</div>
</form>



<?php include_once "footer.php"; ?>