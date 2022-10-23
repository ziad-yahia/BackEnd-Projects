<?php
$title="Review";
include_once"./layouts/header.php";






if($_SERVER["REQUEST_METHOD"] == "POST" &&!empty($_POST) ){

    

 if( $_POST){

        $x=$_POST['1st_reviw'];
        $x2=$_POST['2nd_reviw'];
        $x3=$_POST['3rd_reviw'];
        $x4=$_POST['4th_reviw'];
        $x5=$_POST['5fth_reviw'];
        $total=$x+$x2+$x3+$x4+$x5;
        
    }

    $_SESSION['firstview']=$_POST['1st_reviw'];
    $_SESSION['scondview']=$_POST['2nd_reviw'];
    $_SESSION['thirdview']=$_POST['3rd_reviw'];
    $_SESSION['fourthview']=$_POST['4th_reviw'];
    $_SESSION['fifthview']=$_POST['5fth_reviw'];
    $_SESSION['total']=$total;
    header("location:result.php");

    }
    
   
    
    
  

    





 ?>
 <style>

.image{
    background:  url('images/10130.jpg') no-repeat center/contain;
    min-height: 350px;
    
}

</style>

 <div class="container mt-5 ">

 <div class="col-md-12 h1 text-center text-info mt-5">
    Reveiw
 </div>
 <div class="col-md-12 mt-5 border-bottom">
    <div class="d-flex justify-content-between">
        <div class="col-md-5"><h1> Questions?</h1></div>
        <div class="d-flex justify-content-around  col-md-7">
            <h2>Bad</h2>
            <h2>Good</h2>
            <h2>Very Good</h2>
            <h2>Excellent</h2>
        </div>
    </div>
 </div>

 <form method="POST">
 <div class="col-md-12 mt-1 border-bottom">
    <div class="d-flex justify-content-between">
        <div class="col-md-5"><p> Are You Satisfied With The Level Of Cleanliness?</p></div>
        <div class="d-flex justify-content-around  col-md-7">
        <input type="radio" name="1st_reviw" id="color" value="0">
        <input type="radio" name="1st_reviw" id="color" value="3">
        <input type="radio" name="1st_reviw" id="color" value="5">
        <input type="radio" name="1st_reviw" id="color" value="10">
        <?php echo  $errors['1st_reviwErrors'] ?? ""; ?>
            
        </div>
    </div>
 </div>
 <div class="col-md-12 mt-1 border-bottom">
    <div class="d-flex justify-content-between">
        <div class="col-md-5"><p> Are You Satisfied With The Service Prices?</p></div>
        <div class="d-flex justify-content-around  col-md-7">
        <input type="radio" name="2nd_reviw" id="color" value="0">
        <input type="radio" name="2nd_reviw" id="color" value="3">
        <input type="radio" name="2nd_reviw" id="color" value="5">
        <input type="radio" name="2nd_reviw" id="color" value="10">
            
        </div>
    </div>
 </div>
 <div class="col-md-12 mt-1 border-bottom">
    <div class="d-flex justify-content-between">
        <div class="col-md-5"><p> Are You Satisfied With The Nursing Service?</p></div>
        <div class="d-flex justify-content-around  col-md-7">
        <input type="radio" name="3rd_reviw" id="color" value="0">
        <input type="radio" name="3rd_reviw" id="color" value="3">
        <input type="radio" name="3rd_reviw" id="color" value="5">
        <input type="radio" name="3rd_reviw" id="color" value="10">
            
        </div>
    </div>
 </div>
 <div class="col-md-12 mt-1 border-bottom">
    <div class="d-flex justify-content-between">
        <div class="col-md-5"><p> Are You Satisfied With The Level Of The Doctors?</p></div>
        <div class="d-flex justify-content-around  col-md-7">
        <input type="radio" name="4th_reviw" id="color" value="0">
        <input type="radio" name="4th_reviw" id="color" value="3">
        <input type="radio" name="4th_reviw" id="color" value="5">
        <input type="radio" name="4th_reviw" id="color" value="10">
            
        </div>
    </div>
 </div>
 <div class="col-md-12 mt-1 border-bottom">
    <div class="d-flex justify-content-between">
        <div class="col-md-5"><p> Are You Satisfied With The Calmness In The Hospital?</p></div>
        <div class="d-flex justify-content-around  col-md-7 ">
        <input type="radio" name="5fth_reviw" id="color" value="0">
        <input type="radio" name="5fth_reviw" id="color" value="3">
        <input type="radio" name="5fth_reviw" id="color" value="5">
        <input type="radio" name="5fth_reviw" id="color" value="10">
            
        </div>
    </div>
 </div>

<button type="submit" class="btn btn-outline-info col-md-12 ">Submit</button>
</form>

<div class="image col-md-12"></div>

 </div>

 <?php echo $_SESSION['phone'] ?? ""; ?>
 <?php echo $total ?? ""; ?>
 



<?php
include_once"./layouts/scripts.php";

?>