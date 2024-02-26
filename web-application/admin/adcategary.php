<?php 
    if(isset($_POST['save'])){
        if(!empty($_POST['categary'])){
            $categry = $_POST['categary'];
            $conn = mysqli_connect("localhost","root", "", "web_app_db") or die("COnecction Close.");
            $query = "INSERT INTO categary(categary_name) VALUES ('$categry')";
            $result = mysqli_query($conn,$query) or die("Query failed.");
            $msg = "<div class='alert alert-success my-3 mx-3'>Sucsessful insert. </div>";
            header ("Refresh:3; url=showcategary.php");
           
        }else{
            $msg = "<div class='alert alert-danger my-3 mx-3'>Please Insert Data. </div>";
        }
       

        

    }else{
        $msg = "";
    }
?>
<!--  -->
<?php include_once "admin_header.php";?>
<div class="row">
            <div class="col bg-primary text-light text-center h1 mt-4 ">
                            Add Categary
            </div>
        </div>
        <div class="row"><div class="col"><?php echo $msg; ?></div></div>
        <div class="row">
        
            <div class="col-md-4">
                <!-- <button class="btn btn-info mx-5 mt-5 "><a href="showcategary.php" class="text-decoration-none text-light">Back</a></button> -->
            </div>
            <div class="col-md-4">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                   <div class="formdesine">
                    <h3>Add Categary</h3>
                    <div class="md-3">
                    <label for="" class="form-label"> Add Categary : </label><input type="text" name="categary" class="form-control">
                    </div>
                   <br><br>
                    <input type="submit" value="ADD." name="save"class="btn btn-success form-control">
                  
                    </div>
            </form>
                
                            </div>
            <div class="col-md-4"></div>
        </div>
        <?php  include_once "admin_footer.php" ?>

</body>
</html>
