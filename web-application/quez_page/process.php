<?php  
 $conn = mysqli_connect("localhost","root", "", "web_app_db") or die("COnecction Close.");
 session_start();
 if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
 }



 if(isset($_POST)){
     $query = "SELECT * FROM `quez_question`";
     $result = mysqli_query($conn,$query) or die("Query failed. question");
     $total_questions = mysqli_num_rows(mysqli_query($conn,$query));

   echo  $_SESSION['total_questions'] = $total_questions;

    $number = $_POST['idd'];
     
     $selected_choice = $_POST['quezz'];
     
     
     $next = $number+1;

     //Determine the correct choice for current question
 	$query1 = "SELECT `Result` FROM quez_question WHERE Id = $number";
     $result1 = mysqli_query($conn,$query1) or die ("query failed");
     $row = mysqli_fetch_assoc($result1);

   $correct_choice = $row['Result'];


   //Increase the score if selected cohice is correct
     if($selected_choice == $correct_choice){
         $_SESSION['score']++;
     }
       //Redirect to next question or final score page. 
     if($number == $total_questions){
       
         header("LOCATION: result.php");
     }else{
        $_SESSION['attemp']++;
         header("LOCATION: quizstart.php?n=". $next);
     }
    }

    
?>