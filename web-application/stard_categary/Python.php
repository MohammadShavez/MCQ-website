<?php include_once "hadder_categary.php" ?>
<?php
       session_start();
    echo  $cid =   3;
        $conn = mysqli_connect("localhost","root", "", "web_app_db") or die("COnecction Close.");
        $query ="SELECT   `Id` ,`question_code`, `code_id`,`categary_name`from quez_question JOIN categary on quez_question.categary_id = categary.cid JOIN question_code ON quez_question.categary_id = question_code.code_id where question_code.code_id = {$cid} GROUP By question_code";
        $result = mysqli_query($conn,$query) or die("Query failed.");

?><div class="row">
    <div class="col-2">
        
    </div>
    <div class="col-8">
        <table class="table table-bordered table-striped table-hover  my-5">
        <thead class="bg-dark text-light">
             <th>Sr no.</th>
             <th>Categary Name</th>
             <th>Exam Code</th>
             <th>Status</th>
             <th>Action</th>
        </thead>
        <?php  if(mysqli_num_rows($result)>0){
            
                            while($row = mysqli_fetch_assoc($result)){
                            
                   ?>
             <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['categary_name']; ?></td>
                <td><?php echo $row['question_code']; ?></td>
                <td><button src="#" class="btn btn-success">Active<i class="fa fa-check-circle" aria-hidden="true"> </i> </button></td>
                <td><a href="http://localhost/web-application/login.php?exam=<?php echo $row['question_code'];?>"><button  class="btn btn-primary">Start <i class="fa fa-arrow-right" aria-hidden="true" "></i></button></a></td>
             </tr>
             <?php 
            
             
               $_SESSION['exam_name']  =  $row['categary_name'];
               $_SESSION['ques_code'] = $row['question_code'];
               

             }}

             
             ?>
             
        
</table>
<div class="col-2"></div>
    </div>
</div>
