<?php include_once "admin_header.php" ?> 
       <marquee behavior="" direction=""> <h1 class="text-h">WElCOME TO DASHOARD</h1></marquee>

        <div class="row">
            <div class="col bg-dark text-light text-center h1  ">
                            User Data
            </div>
        </div>


            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                <table class="table table-bordered table-striped mt-5" >
                    <thead class="bg-info text-center text-light">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th> Date & Time</th>
                        <th> Role</th>
                        <th> Action</th>
                    </thead>
                  <?php 
                        $conn = mysqli_connect("localhost","root", "", "web_app_db") or die("COnecction Close.");
                        $query = "SELECT `id`, `Name`, `Email`, `Gender`, `Time_resistation`, `Role` FROM `user_record` ";
                        $result = mysqli_query($conn,$query) or die("Query failed.");
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                                
                                
                  ?>
                  
                    <tr>
                    <td class="text-center"><?php echo $row['id']; ?></td>
                    <td class="text-center"><?php echo $row['Name']; ?></td>
                    <td class="text-center"><?php echo $row['Email']; ?></td>
                    <td class="text-center"><?php echo $row['Gender']; ?></td>
                    <td class="text-center"><?php echo $row['Time_resistation'];?></td>
                    <td class="text-center"><?php echo $row['Role']; ?></td>
                    <td class="text-center">
                        <a href="admin/delete_dashboard.php?d=<?php echo $row['id']; ?>"><button class="btn btn-primary" name="delete"><i class="fa fa-trash" aria-hidden="true"></i></button></a> 
                        <a href="admin/edit-dashboard.php?d=<?php echo $row['id']; ?>"><button class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                        <a href="admin/block_dashboard.php?d=<?php echo $row['id']; ?>"><button class="btn btn-danger"><i class="fa fa-lock" aria-hidden="true"></i></button></a>
                    </td>
                   
                    </tr>
                   <?php  }} ?>
                </table>
                </div>
                <div class="col-1">
                   
                </div>
            </div>


    </div>
<?php  include_once "admin_footer.php" ?>
</body>
</html>
