<?php 
function delete(){
    require "conn.php";
    $id = $_GET['id'];
    $query = "DELETE FROM quez_question WHERE Id = {$id}";
    $result = mysqli_query($conn,$query) or die("Query failed.");
        header ("LOCATION:categary_wise_data.php");


}
delete();
?>