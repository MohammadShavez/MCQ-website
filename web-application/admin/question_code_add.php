<?php include_once "admin_header.php";
include "conn.php"; ?> 
<div class="row">
            <div class="col bg-primary text-light text-center h1 mt-4 ">
                           Add Question Code
            </div>
        </div>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div class="formdesine">
    <h3>Add Question Code</h3>
    <div class="md-3">
    <label for="" class="form-label">Exam Code : </label>
    <select class='form-control' name="qcode">
        <?php 
        $query2 = "SELECT `cid`, `categary_name` FROM `categary` ";  
        $result2 = mysqli_query($conn,$query2) or die("Query failed.");              
        if(mysqli_num_rows($result2)>0){
            while($row1 = mysqli_fetch_assoc($result2)){        
      ?>
        <option value='<?php echo $row1['cid']; ?>'> <?php echo $row1['categary_name']; ?> </option>     
        <?php 
          }
        }
         ?>
         </select>

    </div>

    <div class="md-3">
       <label for="" class="form-label">Question Code : </label><input type="text" name="ques-code" class="form-control">
      <i>Maximum 5 charecter are allowd,</i>
      <i>Use Alphabet, Number, & Syembol.</i>
      <br><br>
       <input type="submit" value="Save." name="save"class="btn btn-success resisbtn">
       </div>
</form>
      </div>
        <?php 
        if(isset ($_POST['save'])){
        $ques_len = strlen ($_POST["ques-code"]);  
        $length = strlen ($ques_len);  
        if(empty($_POST["ques-code"])){
            $ErrMsg = "<script>alert('whitespace are not allowed,')</script>";  
                    echo $ErrMsg; 

        }
        // elseif( $length < 5 && $length > 0){  
        //     $ErrMsg = "<script>alert('Only five Charecter are Allowed.')</script>";  
        //             echo $ErrMsg;  
                    
           else {  
             $code = $_POST['ques-code'];
             $num_categary = $_POST['qcode'];
            include "conn.php";
            $query = "INSERT INTO `question_code`( `question_code`, `code_id`) VALUES ('{$code}','{$num_categary}')";
                $result = mysqli_query($conn,$query) or die("Query failed.");
                $ErrMsg = "<script>alert('Insert Successfull.')</script>";  
                echo $ErrMsg;  
        } 
        }
        ?>
        <div class="row">
          <div class="col">
          <?php include_once "admin_footer.php"; ?>

          </div>
        </div>