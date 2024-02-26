<?php include_once "admin_header.php" ?>
<div class="row">
            <div class="col bg-primary text-light text-center h1 mt-4 ">
                           User Feedback
            </div>
        </div>

<div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                <table class="table table-bordered table-striped mt-5" >
                    <thead class="bg-info text-center text-light">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Eamil</th>
                        <th>Massage</th>
                        <th> Action</th>
                    </thead>
                  <?php 
                       include "conn.php";
                        $query = "SELECT * FROM `feedback` ";
                        $result = mysqli_query($conn,$query) or die("Query failed.");
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                                
                                
                  ?>
                  
                    <tr>
                    <td class="text-center"><?php echo $row['Id']; ?></td>
                    <td class="text-center"><?php echo $row['Name']; ?></td>
                    <td class="text-center"><?php echo $row['Email']; ?></td>
                    <td class="text-center"><?php echo $row['MASSAGE']; ?></td>
                    <td class="text-center">
                        <a href="admin/delete_feedback.php?n=<?php echo $row['Id']; ?>"><button class="btn btn-primary"  ><i class="fa fa-trash" aria-hidden="true"></i></button></a> 
                        <a href="admin/edit_feedback.php?n=<?php echo $row['Id']; ?>"><button class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                        <a href="admin/block_feedback.php?n=<?php echo $row['Id']; ?>"><button class="btn btn-danger"><i class="fa fa-lock" aria-hidden="true"></i></button></a>
                    </td>
<?php }}?>
                    </tr>
                </div>
             <div class="col-1"></div>
 </div>

     <?php // include_once "admin_footer.php" ?>

