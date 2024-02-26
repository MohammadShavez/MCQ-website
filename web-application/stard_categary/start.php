<?php include_once "hadder_categary.php" ?>


<?php 
          $conn = mysqli_connect("localhost","root", "", "web_app_db") or die("COnecction Close.");
          $query = "SELECT * FROM categary";
          $result = mysqli_query($conn,$query) or die("Query failed.");
         
     
?>
    <div class="container-f">
        <div class="row bg-info m-4 ">
            <div class="col m-3 text-center h1 text-light">Select Your Test</div>           
        </div>

    <div class="row">
        
    <?php 
              if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    $_SESSION['cate_id'] = $row['cid'];
    
            ?>
        <div class="col">
                <a href="<?php echo $row['categary_name']?>.php"><div class="bbxbox"><?php echo $row['categary_name']; ?> </div></a>
        </div>
        <?php 
     
        
    
    }} ?>
    </div>
  