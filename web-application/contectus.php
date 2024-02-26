<?php include_once "hedder.php"?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="formdesine">
       <h3 class="mt-3 mb-3"><b> <i class="fa fa-user" aria-hidden="true"></i>Contect Us</b></h3>
       <div class="md-3">
       <label for="" class="form-label">Name : </label><input type="text" name="name" class="form-control">
       </div>
       <div class="md-3">
           <label for="">Email: </label><input type="email" name="email"  class="form-control">
       </div>
       <div class="md-3">
           <label for="">Massage : </label><textarea name="massage" id="" cols="35" rows="5"></textarea>
       </div>
       <input type="submit" value="SUBMIT" name="login"class="btn btn-success resisbtn">
      
</form>
    </div>
    <div class="col-3"></div>
</div>
<?php include_once "footer.php"?>


<?php
 if(isset($_POST['login'])){

    if(empty($_POST['name'])){
        echo  $msg = "<script>alert('Name is Reqvierd')</script>";
    }elseif(empty($_POST['email'])){
        echo  $msg = "<script>alert('Email is Reqvierd')</script>";
    }elseif(empty($_POST['massage'])){
        echo  $msg = "<script>alert('Massage is Reqvierd')</script>";
    }else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $massage = $_POST['massage'];

     include "admin/conn.php";
     $query = "INSERT INTO `feedback`(`Name`, `Email`, `MASSAGE`) VALUES ('$name','$email','$massage')";
     $result = mysqli_query($conn,$query) or die("Query failed.");

   echo  $msg = "<script>alert('Massage Send Succsessfully, We Will Reply Your Query As Soon As Possible. ')</script>";
   header("Refresh:0; url=index.php");
 }
    echo $msg = " ";
}
?>