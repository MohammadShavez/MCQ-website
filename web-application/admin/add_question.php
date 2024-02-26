<?php  


    if(isset($_POST['save'])){
        $question = $_POST['question'];
        $option_a = $_POST['option_a'];
        $option_b = $_POST['option_b'];
        $option_c = $_POST['option_c'];
        $option_d = $_POST['option_d'];
        $an = $_POST['ans'];
        $categay = $_POST['categary'];
        $qustion_code = $_POST['qcode'];
        $Id = "";
    //    
        if($an == 1){
            $answer =  $_POST['option_a'];
        }else if($an == 2){
            $answer =  $_POST['option_b'];
        }else if($an == 3){
            $answer = $_POST['option_c'];
        }else{
            $answer = $_POST['option_d'];
        }
    // 
        
       include "conn.php";
        $query = "INSERT INTO `quez_question`(`Question`, `Option_a`, `Option_b`, `Option_c`, `Option_d`, `Result`,`categary_id`, `test_no`,`Id`)
         VALUES ('$question','$option_a','$option_b','$option_c','$option_d','$answer','$categay','$qustion_code','$Id')";
        $result = mysqli_query($conn,$query) or die("Query failed insert fail.");
       
        $sql = "SELECT Count(Id) As Id FROM `quez_question` WHERE test_no = '{}'";

       echo $msg = "<script>alert('Question Inserted Succsessfully.')</script>";
    
        }
        else{
        echo    $msg = " ";
        }

    
?>


<!--  -->
<?php include_once "admin_header.php";?>

<div class="row">
            <div class="col bg-primary text-light text-center h1 mt-4 ">
                            Add Question
            </div>
        </div>


<div class="row">
    <div class="col-3"></div>
    <div class="col-6">

            
    <div class="outer mt-5">
        <h1 class="text-center mb-2">Add Question.</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="md-3">
    <label for="" class="form-label">Select Categary : </label>
    <select class='form-control' name="categary">
        <?php 
        session_start();
        $query1 = "SELECT * FROM categary";
        include "conn.php";
        $result1 = mysqli_query($conn,$query1) or die("Query failed.");
        if(mysqli_num_rows($result1)>0){
            while($row1 = mysqli_fetch_assoc($result1)){
        
      ?>

        <option value='<?php echo $row1['cid']; ?>'> <?php echo $row1['categary_name']; ?> </option>
        
        <?php 
          }
          
        }
         ?>
         </select>
    
<hr>
    </div>

      <div class="md-3">
       <label for="" class="form-label">Question : </label><textarea name="question" id="" cols="30" rows="2" class="form-control"></textarea>
      </div>
 <div class="md-3">
<label for="" class="form-label">Question Code : </label>
<!-- second select box -->
<select class='form-control' name="qcode">
        <?php 
        $query2 = "SELECT * FROM question_code";  
        $result2 = mysqli_query($conn,$query2) or die("Query failed.");              
        if(mysqli_num_rows($result2)>0){
            while($row1 = mysqli_fetch_assoc($result2)){
        
      ?>

        <option value='<?php echo $row1['question_code']; ?>'> <?php echo $row1['question_code']; ?> </option>
      
        <?php 
      echo   $_SESSION['abc'] =   $row1['question_code'];          }
          
        }
         ?>
 </select>
         <!-- select box end -->
        </div>
        <div class="md-3">
                 <label for="" class="form-label">Option A : </label><input type="text" name="option_a" class="form-control">
        </div>
        <div class="md-3">
                <label for="" class="form-label">Option B : </label><input type="text" name="option_b" class="form-control">
        </div>
        <div class="md-3">
                 <label for="" class="form-label">Option C : </label><input type="text" name="option_c" class="form-control">
        </div>
        <div class="md-3">
                 <label for="" class="form-label">Option D : </label><input type="text" name="option_d" class="form-control">
        </div>
        <div class="md-3">
                 <label for="" class="form-label">Correct Answer : </label><br>
                    <div class=" text-center">
                <input type="radio" name="ans" value="1">  <label class="form-label mx-3"> <b> Option A  </b></label>
                <input type="radio" name="ans" value="2">  <label class="form-label mx-3"> <b> Option B  </b></label>
                <input type="radio" name="ans" value="3">  <label class="form-label mx-3"> <b> Option C  </b></label>
                <input type="radio" name="ans" value="4">  <label class="form-label mx-3"> <b> Option D  </b></label>
                      </div>
         </div>
    
            <div class="md-3">
                 <input type="submit" value="INSERT RECOARD" name="save" class="btn btn-success form-control">
            </div>
            
         </div>
    </form>
    </div>
    </div>
 <div class="col-3"></div>
</div>
<div class="row">
    <div class="col">
    <?php  include_once "admin_footer.php" ?>
    </div>
</div>
