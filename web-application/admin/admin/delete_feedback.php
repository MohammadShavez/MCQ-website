<?php
 include "../conn.php";
 $id =($_GET['n']);
 if(isset($_GET['n'])){
    
    echo $msg =" <script>confirm('Are You Want to Sure Delete Record.')</script>";

               
                    $query = "DELETE FROM feedback WHERE id = $id";
                    $result = mysqli_query($conn,$query) or die("Query failed.");

                header("Refresh:0; url=../feedback.php");
               
                
                
            
 
 }else{
    echo " <script>confirm('No Record Found.')</script>";
 }
?>