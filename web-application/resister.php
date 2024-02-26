<?php include_once "hedder.php" ?>

<div class="formdesine">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <legend><h3>RESISTER HERE.</h3></legend>
       <div class="md-3">
       <label for="" class="form-label">NAME : </label><input type="text" name="name" class="form-control">
       </div>
       <div class="md-3">
       <label for="" class="form-label">EMAIL : </label><input type="email" name="email" class="form-control">
       </div>
       <div class="md-3">
           <label for="">PASSWORD : </label><input type="password" name="password" autocomplite="off" class="form-control">
       </div>
       <div class="radio">
           <label for="" id="gen">GENDER : </label>
                            <input type="radio" name="gender" value="Male"><label for=""> Male</label>
                            <input type="radio" name="gender" value="Female"><label for=""> Female</label>
                            <input type="radio" name="gender" value="other"><label for=""> Other</label>
       </div>
       <input type="submit" value="RESESTER." name="resister"class="btn btn-success resisbtn">
       If are you Already Resister?<a href="login.php">click here</a> to Login.
        </fieldset>
    </form>
</div>
<!-- 
    php code
 -->
 <?php
   date_default_timezone_set("Asia/calcutta");
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['resister'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass =md5( $_POST['password']);
            $gender = $_POST['gender'];
            $date = date("Y-m-d H:i:s");

            include "admin/conn.php";
            $query = "INSERT INTO user_record(NAME,Email,Gender,Password,Time_resistation) values('$name','$email','$gender','$pass','$date')";
            $result = mysqli_query($conn,$query) or die("Query failed.");
            echo "<script>alert('Resister successfull, Go To Login.')</script>";
            header("Refresh:0; url= login.php");
            }else{
                echo "<script>alert('Error, Please Try  Again.')</script>";
            }
   }
?>
<?php include_once "footer.php"; ?>
