<?php include_once "head.php";?>
<?php session_start(); 
 if(!isset($_SESSION['Name'])){
      header ("LOCATION: ../login.php");
 }

?>
<!--  -->
<body>
    <div class="container-f">
    <div class="row bg-primary">
            <div class="col-md-2 bg-primary"><img src="../img/logo.png" alt="logo" id="logo"></div>
            <div class="col-md-8 name"><span>Q</span>uezz</div>
            <div class="col-md-2"></div>
        </div>
        <div class="row"><div class="col"><div class="text-center text-dark p-3 h3">Welcome  <b><?php echo ( $_SESSION['Name']); ?></b> let's start the Quez.</div></div></div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><div id="clockdiv"></div>
        
            <div class="formdesine">

            <?php     

                        if(!isset($_GET['n'])){
                            $in = 1;
                            //echo $in;
                        }else{
                            $in = $_GET['n'];
                           // $in =1;
                        }
                       
                    //  error found
                
                 $qcode =  $_SESSION['ques_code'];
           
                      

                        $conn = mysqli_connect("localhost","root", "", "web_app_db") or die("COnecction Close.");
                        $query = "SELECT `Question`, `Option_a`, `Option_b`, `Option_c`, `Option_d`,Id FROM `quez_question`join question_code on question_code.q_id = quez_question.categary_id WHERE question_code.question_code = '$qcode' and Id = '$in'";
                        $result = mysqli_query($conn,$query) or die("Query failed. question");
                        
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){

                  ?>
                  <form action="process.php" method="post">
                      <input type="hidden" name="idd" value="<?php echo $row['Id']; ?>">
                <div class="question"><h4><b> Question :<?php echo $row['Id']; ?> </b>- <?php echo htmlspecialchars($row['Question']); ?></h4></div>
                <div class="radeicss" ><input  name="quezz" type="radio" value="<?php echo $row['Option_a']; ?>" >  <?php echo  htmlspecialchars($row['Option_a']); ?>  </div>
                <div class="radeicss" ><input  name="quezz" type="radio" value="<?php echo $row['Option_b']; ?>" >  <?php echo  htmlspecialchars($row['Option_b']); ?>  </div>
                <div class="radeicss" ><input  name="quezz" type="radio" value="<?php echo $row['Option_c']; ?>" >  <?php echo  htmlspecialchars($row['Option_c']); ?>  </div>
                <div class="radeicss" ><input  name="quezz" type="radio" value="<?php echo $row['Option_d']; ?>" >  <?php echo  htmlspecialchars($row['Option_d']); ?>  </div>
           
                <div class="row mt-4">
                    <div class="col-6">
                    <?php
                     if($in>1){
                        ?>    
                             <a href="quizstart.php?n=<?php echo $in-1 ?>" class="text-light text-decoration-none"> <button class="btn btn-success">Previus</button> </a>
                   
                </div>

                        <?php } ?>

                    <div class="col-6">
                        <?php
                         if($in==10){
                            echo '<button class="btn btn-primary">Submit</button>';
                            echo '<script>alert("Are you Sure to Submit Your answer?")</script>';

                            header("LOCATION: result.php");
                        }
                          else {
                          ?>
                                 <a href="quizstart.php?n=<?php echo $in+1; ?>" class="text-light text-decoration-none"> <button class="btn btn-success ml-5">NEXT</button></a>
                    </div>
                    <?php  }}} ?>
                    </form>
                </div>
            </div>
                       
        </div>
       
    </div>
    </div>
</body>
</html>






