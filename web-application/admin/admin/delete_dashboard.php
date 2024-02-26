<?php
 include "../conn.php";
 $id =($_GET['d']);
 if(isset($_GET['d'])){
    
    echo $msg =" <script>confirm('Are You Want to Sure Delete Record.')</script>";

    if("confirm('Are You Want to Sure Delete Record.')"==true){
        $query = "DELETE FROM user_record WHERE id = $id";
        $result = mysqli_query($conn,$query) or die("Query failed.");

    header("Refresh:1; url=../dashboard.php");
    }
    
 
 
 }else{
    echo " <script>confirm('No Record Found.')</script>";
 }
?>