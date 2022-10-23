<?php 
$title="Result";
include_once'./layouts/header.php';

// if($_SESSION['firstview'] == 0){
// $colresult="bad";
// }
switch($_SESSION['firstview']){
    case 0:
        $firstcolresult="bad";
        break;
    case 3:
        $firstcolresult="good";
        break;
    case 5 :
        $firstcolresult="very good";
        break;
    case 10:
        $firstcolresult="Ecellent";
        break;
}

// second column
switch($_SESSION['scondview']){
    case 0:
        $scondcolresult="bad";
        break;
    case 3:
        $scondcolresult="good";
        break;
    case 5 :
        $scondcolresult="very good";
        break;
    case 10:
        $scondcolresult="Ecellent";
        break;
}
// third column
switch($_SESSION['thirdview']){
    case 0:
        $thirdcolresult="bad";
        break;
    case 3:
        $thirdcolresult="good";
        break;
    case 5 :
        $thirdcolresult="very good";
        break;
    case 10:
        $thirdcolresult="Ecellent";
        break;
}
// fourth column
switch($_SESSION['fourthview']){
    case 0:
        $fourthcolresult="bad";
        break;
    case 3:
        $fourthcolresult="good";
        break;
    case 5 :
        $fourthcolresult="very good";
        break;
    case 10:
        $fourthcolresult="Ecellent";
        break;
}
// fifth column
switch($_SESSION['fifthview']){
    case 0:
        $fifthcolresult="bad";
        break;
    case 3:
        $fifthcolresult="good";
        break;
    case 5 :
        $fifthcolresult="very good";
        break;
    case 10:
        $fifthcolresult="Ecellent";
        break;
}

// total
if( $_SESSION['total'] < 25){
    $totalmassage="bad";
}elseif( $_SESSION['total'] >= 25 &&  $_SESSION['total'] < 50){
    $totalmassage="good";
}else{
    $totalmassage="Excellent";
}

// user massage
if($_SESSION['total'] < 25){

    $usermassage="<div class='alert alert-danger text-center font-weight-bold' role='alert'> Please Contact  The Patient To Find Out The Reason For Bad Evaluation  *".$_SESSION['phone']."*</div>";


}else{

    $usermassage="<div class='alert alert-success text-center  font-weight-bold' role='alert'>Thanks</div>" ;


}
?>


<div class="container mt-5 ">

 <div class="col-md-12 h1 text-center text-info mt-5">
    Reveiw
 </div>
 <div class="col-md-12 mt-5 border-bottom bg-dark text-light">
    <div class="d-flex justify-content-between">
        <div class="col-md-5"><h1> Questions?</h1></div>
        <div class="d-flex justify-content-end  col-md-7">
            <h2>Results</h2>       
        </div>
    </div>
 </div>

 <div class="col-md-12 mt-1 border-bottom">
    <div class="d-flex justify-content-between">
        <div class="col-md-5"><p> Are You Satisfied With The Level Of Cleanliness?</p></div>
        <div class="d-flex justify-content-end  col-md-7">
        <?php echo $firstcolresult ?? "" ; ?>    
        </div>
    </div>
 </div>
 
 <div class="col-md-12 mt-1 border-bottom">
    <div class="d-flex justify-content-between">
        <div class="col-md-5"><p> Are You Satisfied With The Level Of Cleanliness?</p></div>
        <div class="d-flex justify-content-end  col-md-7">
       <?php echo $scondcolresult  ?? "" ; ?>    
        </div>
    </div>
 </div>
 
 <div class="col-md-12 mt-1 border-bottom">
    <div class="d-flex justify-content-between">
        <div class="col-md-5"><p> Are You Satisfied With The Level Of Cleanliness?</p></div>
        <div class="d-flex justify-content-end  col-md-7">
        <?php echo $thirdcolresult ?? "" ; ?>    
        </div>
    </div>
 </div>
 
 <div class="col-md-12 mt-1 border-bottom">
    <div class="d-flex justify-content-between">
        <div class="col-md-5"><p> Are You Satisfied With The Level Of Cleanliness?</p></div>
        <div class="d-flex justify-content-end  col-md-7">
        <?php echo $fourthcolresult ?? "" ; ?>    
        </div>
    </div>
 </div>
 
 <div class="col-md-12 mt-1 border-bottom">
    <div class="d-flex justify-content-between">
        <div class="col-md-5"><p> Are You Satisfied With The Level Of Cleanliness?</p></div>
        <div class="d-flex justify-content-end  col-md-7">
        <?php echo $fifthcolresult ?? "" ; ?>    
        </div>
    </div>
 </div>
 <div class="col-md-12  border-bottom bg-dark text-light">
    <div class="d-flex justify-content-between">
        <div class="col-md-5"><h1>Total Review</h1></div>
        <div class="d-flex justify-content-end  col-md-7">
        <?php echo $totalmassage ?? ""; ?>        
    </div>
    </div>
 </div>

 <?php echo $usermassage ?? ""; ?>


</div>

<?php
include_once"./layouts/scripts.php";
?>