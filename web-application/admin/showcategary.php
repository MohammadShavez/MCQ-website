
<?php 
     include "conn.php";
     $query = "SELECT * FROM categary";
     $result = mysqli_query($conn,$query) or die("Query failed.");
    
     
include_once "admin_header.php";
?>

<div class="row">
            <div class="col bg-primary text-light text-center h1 mt-4 ">
                            Show Categary
            </div>
        </div>
<!--  -->
        <div class="row">
            <div class="col-md-2">
            <!-- <button class="btn btn-info mx-5 mt-5 "><a href="index.php" class="text-decoration-none text-light">Back</a></button> -->

            </div>
            <div class="col-md-8">
                <table class="table table-bordered table-striped mt-5" >
                    <thead class="bg-info text-center text-light">
                        <th>ID</th>
                        <th>Categary</th>
                        <th>Action</th>
                    </thead>
                    <?php 
                             if(mysqli_num_rows($result)>0){
                           while($row = mysqli_fetch_assoc($result)){
                     ?>

                    <tr>
                    <td class="text-center"><?php echo $row['cid']; ?></td>
                    <td class="text-center"><?php echo $row['categary_name']; ?></td>
                        <td class="text-center"><a href="categary_wise_data.php?categary=<?php echo $row['cid']; ?>">Details</a> </td>
                       
                    </tr>
                    <?php     
                        }  
                        }
                       
                      ?>
                </table>
               
             </div>
            <div class="col-md-2 mt-3 ">
                <button class="btn btn-info "> <a href="adcategary.php" class=" text-white h5 text-decoration-none">Add Categary</a></button>
            </div>
        </div>
</body>
</html>

<?php  include_once "admin_footer.php" ?>
