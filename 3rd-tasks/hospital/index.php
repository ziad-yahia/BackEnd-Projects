<?php
$title="Hospital";
include_once"./layouts/header.php";

if($_SERVER["REQUEST_METHOD"] == "POST"  && !empty($_POST)){



    //form validate
    $errors=[];
    
    if(empty($_POST['phone'])){

        $errors['phoneerror']="<h1 class='text-danger font-weight-bold'>* Phone Number Is Requierd</h1>";
    }




}
if(!empty($_POST['phone'])){
    $_SESSION['phone']=$_POST['phone'];
    
header("location:review.php");

}



?>
<style>

    .image{
        background:  url('images/3343994.jpg') no-repeat center/contain;
        min-width: 450px;
    }
    .d{
        min-height: 550px;
        padding: 30px;
    }

</style>

<div class="d container">
    <div class="row mt-5">
        <div class="image col-md-6">
           
        </div>

        <div class="col-md-6">
            <div class="col-md-12 h1 text-center font-weight-blod text-info">
                Hospital
            </div>
        <form class="border border-info p-4 mt-5"  method="post">
        
        <div class="form-group text-center">

            <label for="exampleInputEmail1" class="font-weight-bold">Phone Number</label>
            <input type="number" name="phone" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <?php echo $errors['phoneerror']??  "";  ?>
        </div>

        <button type="submit" class="btn btn-outline-info col-md-12 ">Submit</button>

    </form>


        </div>
    </div>
</div>



<?php 

include_once"./layouts/scripts.php";

?>