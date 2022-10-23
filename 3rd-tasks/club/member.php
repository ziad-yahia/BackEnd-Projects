<?php 
$title="member";
include_once"./layouts/heder.php";


if ($_SERVER["REQUEST_METHOD"] == "POST"  && !empty($_POST) ){
$_SESSION["memberusername"]=$_POST['names'];
    header('location:result.php');
}
switch($_POST['play']){

    case 'Football':
        
        $total=300;
        break;
    case 'Swimming':
        $total=250;
    break;
    case 'Volleyball':
        $total=150;
        break;
    case 'others':
        $total=100;
        break;

}

$_SESSION['x']=$total;
$_SESSION['playvalue']=$_POST['play'];

 ?>


<div class="container  mt-4">

<form  method="POST">

<?php

// echo $_SESSION['total-club-subscribtion'];

for($i=1;$i <= $_SESSION['familycount'];$i++){ ?>
 
    

    
<h1 class="text-warning">Member <?php echo $i. "<br>";   ?></h1> 
<div class="form-group ">

<input type="text" name="names[]" value="User Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="custom-control custom-checkbox mr-sm-2 mt-3">

<input type="checkbox"  name="play[]" value="Football">
  <label > Football <strong>300LE.</strong></label><br>
  <input type="checkbox"  name="play[]" value="Swimming">
  <label for="vehicle2"> Swimming  <strong>250LE.</strong></label><br>
  <input type="checkbox"  name="play[]" value="Volleyball">
  <label for="vehicle2">Volleyball <strong>150LE.</strong></label><br>
  <input type="checkbox"  name="play[]"  value="Others">
  <label for="vehicle2"> Others <strong>100LE.</strong></label><br>

</div>

<?php } ?>
<button type="submit" class="btn btn-outline-warning col-md-12  mt-5">Check price</button>

</form>
</div>


<?php include_once"./layouts/scripts.php"; ?>