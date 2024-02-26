


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
        <div class="row bg-dark ">
           <div class="col text-center text-white h2"> All Details </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            <button class="btn btn-info mx-5 mt-5 "><a href="dashboard.php" class="text-decoration-none text-light">Back</a></button>

            </div>
            <div class="col-md-8">
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
                    </thead>
                  <?php 
                        $conn = mysqli_connect("localhost","root", "", "web_app_db") or die("COnecction Close.");
                        $query = "SELECT * FROM quez_question left join categary ON quez_question.categary_id = categary.cid WHERE 1";
                        $result = mysqli_query($conn,$query) or die("Query failed.");
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){

                  ?>
                    <tr>
                    <td class="text-center"><?php echo $row['Id']; ?></td>
                    <td class="text-center"><?php echo $row['Question']; ?></td>
                    <td class="text-center"><?php echo $row['Option_a']; ?></td>
                    <td class="text-center"><?php echo $row['Option_b']; ?></td>
                    <td class="text-center"><?php echo $row['Option_c']; ?></td>
                    <td class="text-center"><?php echo $row['Option_d']; ?></td>
                    <td class="text-center bg-warning"><?php echo $row['Result']; ?></td>
                   
                    <td class="text-center"><?php echo $row['categary_name']; ?></td>
                       
                    </tr>
                   <?php  }} ?>
                </table>
               
             </div>
            <div class="col-md-2 mt-3 ">
                <button class="btn btn-info "> <a href="adcategary.php" class=" text-white h5 text-decoration-none">Add Categary</a></button>
            </div>
        </div>
        <?php  include_once "admin_footer.php" ?>

</body>
</html>

