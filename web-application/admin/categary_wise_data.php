


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
</head>
<body>
    <div class="container-f">
        <div class="row">
            <div class="col text-center bg-primary header">ADMIN PANAL</div>
        </div>
        
        <div class="row">
            <div class="col bg-dark text-light text-center h1  ">
                           Show Record
            </div>
        </div>
        <div class="row">
            <div class="col bg-primary text-light text-center h1  m-3 p-3 ">
                        <?php
                        session_start();
                         echo $_SESSION['categaroy']; 
                         ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            <button class="btn btn-info mx-5 mt-5 "><a href="showcategary.php" class="text-decoration-none text-light">Back</a></button>

            </div>
            <div class="col-md-10">
            <table class="table table-bordered table-striped mt-5" >
                    <thead class="bg-info text-center text-light">
                        <th>ID</th>
                        <th>Question</th>
                        <th>Option A</th>
                        <th>Option B</th>
                        <th>Option C</th>
                        <th>Option D</th>
                        <th>Correct ANSWER</th>
                        <th> Categary</th>
                        <th> Action</th>
                        <th> Action</th>
                    </thead>
                  <?php 
                  if(!isset($_GET['categary'])){
                        echo '<h1>Record Not Found.</h1>';

                  }else{
                        $cid = $_GET['categary'];
                  
                        $conn = mysqli_connect("localhost","root", "", "web_app_db") or die("COnecction Close.");
                        $query = "SELECT * FROM quez_question left join categary ON quez_question.categary_id = categary.cid   WHERE categary_id = {$cid}";
                        $result = mysqli_query($conn,$query) or die("Query failed.");
                  
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){

                  ?>
                    <tr>
                    <td class="text-center"><?php echo htmlspecialchars($row['Id']); ?></td>
                    <td class="text-center"><?php echo htmlspecialchars($row['Question']); ?></td>
                    <td class="text-center"><?php echo htmlspecialchars($row['Option_a']); ?></td>
                    <td class="text-center"><?php echo htmlspecialchars($row['Option_b']); ?></td>
                    <td class="text-center"><?php echo htmlspecialchars($row['Option_c']); ?></td>
                    <td class="text-center"><?php echo htmlspecialchars($row['Option_d']); ?></td>
                    <td class="text-center bg-primary text-light"><?php echo htmlspecialchars($row['Result']);?></td>
                   
                    <td class="text-center"><?php echo $_SESSION['categaroy'] =  $row['categary_name']; ?></td>
                    <td class="text-center">
                    <a href="edit_question.php?id=<?php echo $row['Id']; ?>"class="text-dark"><div class="btn btn-warning">Edit</div></a>
                       
                    </td>
                    <td class="text-center">
                    <a href="delete_question.php?id=<?php echo $row['Id']; ?>" class="text-dark"> <div class="btn btn-danger">Delete</div></a>                       
                    </td>
                       
                    </tr>

                   <?php 
                 }}} ?>
                </table>
               
             </div>
            <div class="col-md-1 mt-3 "></div>
        </div>
        <?php  include_once "admin_footer.php" ?>

</body>
</html>

