


<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panal</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/admin.css">

<div class="container-f">
<div class="row">
            <div class="col text-center bg-primary header">ADMIN PANAL</div>
        </div>
        <div class="row bg-dark">
            
        <div class=" nav ">
                    <li class="nav-item">
                        <a class="nav-link text-light " href="dashboard.php">USER DATA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="add_question.php">ADD QUESTION</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="showcategary.php">Categary</a>
                    </li>
                    
                </div>
        </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6"><?php //  echo $msg;?>
            <div class="h1 text-center text-dark py-2">MODYFY QUESTION</div>
            <div class="outer">

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="md-3">
            <label for="" class="form-label">Select Categary : </label>
            <select class='form-control' name="categary">
              <?php   
                $id = $_GET['id'];
               
                $qu1 = "SELECT * FROM categary join quez_question on categary.cid = quez_question.categary_id Where cid = '{$id}'; ";
                $conn = mysqli_connect("localhost","root", "", "web_app_db") or die("COnecction Close.");
                $tot = mysqli_query($conn,$qu1) or die("Query failed.");
                
                if(mysqli_num_rows($tot)>0){
                    while($arr = mysqli_fetch_assoc($tot)){
                        if($arr['Id'] == $id and  $arr['Result']==$arr['cid'] ){
                           
                           
                         
                           
              ?>

                <option value='<?php echo $arr['cid']; ?>'> <?php echo $arr['categary_name']; ?> </option>
                
                <?php  }}} ?>
                 </select>
            
<hr>
            </div>
            <!-- php code stard here. show data.-->
            <?php
                 //    show question query
                 // if(!empty($id)){
                     // $id = $_GET['id'];
                      $conn = mysqli_connect("localhost","root", "", "web_app_db") or die("COnecction Close.");
                      $query = "SELECT * FROM quez_question left join categary on quez_question.categary_id = categary.cid WHERE Id = '{$id}'";
                      $result = mysqli_query($conn,$query) or die("Query failed.");
                 
                  
                    if(mysqli_num_rows($result)>0){
                      while($res = mysqli_fetch_assoc($result)){
                ?>
              <div class="md-3">
                 
                        
       <label for="" class="form-label">Question : </label><input value="<?php echo $res['Question'];?>" name="question" class="form-control">
       </div>
       <div class="md-3">
       <input type="hidden" value="<?php echo $res['Id'];?>" name="qid">
      
       <label for="" class="form-label">Option a : </label><input type="text" value="<?php echo $res['Option_a'];?>" name="option_a" class="form-control">
       </div>
       <div class="md-3">
       <label for="" class="form-label">Option b : </label><input type="text" value="<?php echo $res['Option_b'];?>" name="option_b" class="form-control">
       </div>
       <div class="md-3">
       <label for="" class="form-label">Option c : </label><input type="text" value="<?php echo $res['Option_c'];?>" name="option_c" class="form-control">
       </div>
       <div class="md-3">
       <label for="" class="form-label">Option d : </label><input type="text" value="<?php echo $res['Option_d'];?>" name="option_d" class="form-control">
       </div>
       <?php   ?>
       <div class="md-3">
       <label for="" class="form-label">Correct Answer : </label><br>
                    <div class="rb">
                        <?php if($res['Id']==$res['Result']){
                          echo "<div class='alert alert-succsess'>".$res['categary_name']."</div>";
                        
                       }else{
                           echo "error";
                       }}} ?>
                   </div>
                <div class="md-3">
                    <input type="radio" name="ans" value="1">  <label class="form-label">  Option A : </label><br/>
                    <input type="radio" name="ans" value="2">  <label class="form-label">  Option B : </label><br/>
                    <input type="radio" name="ans" value="3">  <label class="form-label">  Option C : </label><br/>
                    <input type="radio" name="ans" value="4">  <label class="form-label">  Option D : </label><br/>
       </div>
    <div class="md-3">
        <input type="submit" value="INSERT RECOARD" name="save" class="btn btn-success form-control">
    </div>
   
</form>


        </div>
        <div class="col-3"></div>
    </div>
</div>
</div>
<!--  -->
<?php
            if(isset($_POST['save'])){
               // $Qid = $_POST['qid'];
                $question = $_POST['question'];
                $option_a = $_POST['option_a'];
                 $option_b = $_POST['option_b'];
                $option_c = $_POST['option_c'];
                $option_d = $_POST['option_d'];
                 $answer = $_POST['ans'];
                 $categay = $_POST['categary'];
                    //update form query
                    //$id = $_GET['id'];
                    $conn = mysqli_connect("localhost","root", "", "web_app_db") or die("COnecction Close.");
                    $squery = "UPDATE `quez_question` SET `Question`='$question',`Option_a`='$option_a',`Option_b`='$option_b',`Option_c`='$option_c',
                               `Option_d`='$option_d',`Result`='$answer' WHERE Id ={$id})";
                    $sql = mysqli_query($conn,$squery);
                    echo "update successful";
            }else{
                echo "Error";
            }
?>
<?php  include_once "admin_footer.php" ?>
