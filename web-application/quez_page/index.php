
<?php include_once "head.php";
       
        session_start();
        echo  $_SESSION['qid'];
        ?>
<body>
    <div class="container-f">
    <div class="row bg-primary">
            <div class="col-md-2 bg-primary"><img src="../img/logo.png" alt="logo" id="logo"></div>
            <div class="col-md-8 name"><span>Q</span>uezz</div>
            <div class="col-md-2"></button></div>
</div>
<div class="row">
    
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8 text-center pt-5">
    <h1 class="">Quiz Instructions</h1>
    <div class="col text-right m-3 text-primary">
    <h4><?php echo  $_SESSION['Name']; ?></h4>
    <h4><?php echo  $_SESSION['Email']; ?></h4>
    </div>
<i class="text-primary font-weight-bold"> || Questions 10||</i>


</div>
</div>
<div class="col-2"></div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
<div class="text-center ">
<h2><b>Instructions</b></h2>
<hr>
<p>You have Choosen <span class=" text-warning font-weight-bold h4"><?php echo $_SESSION['exam_name']; ?> </span> Exam Categary.</p>
<p>This quiz consists of 10 multiple-choice questions. To be successful with the Compueter Scince, it’s important to thoroughly read Computer Code  in the textbook.  It will also be extremely useful to study the key terms at the end of the chapter and review the Test Your Knowledge activity at the end of the chapter. Keep the following in mind:
 
</p>
    <p>Multiple Attempts - You will have three attempts for this quiz with your highest score being recorded in the grade book.
    </p>
    <p>
    Timing - You will need to complete each of your attempts in one sitting, as you are allotted <b>10 minutes </b> to complete each attempt.
    </p>
    <p>Answers - You may review your answer-choices and compare them to the correct answers after your final attempt.
    </p>
    <p>To start, click the <b>"Take the Quiz"</b> button. When finished, click the <b>"Submit Quiz"</b> button.
    </p>
    <p>    Only registered, enrolled users can take graded quizzes .</p>
    
    <a href="quizstart.php"><button class="btn btn-success">Take the Quiz.</button></a>
    <div id="clockdiv"></div>
    </div>
    <div class="col-1"></div>
</div>
</div>
<?php 
if(!isset($_SESSION['exam_name'])){
    header ("location:..//stard_categary/start.php");
}
if(isset($_SESSION['Name'])){
    // header ("location : http://localhost/web-application/quez_page/index.php");
}
?>