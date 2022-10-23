<?php 
if($_POST){
    $first_number=$_POST['1st-Num'];
    $second_number=$_POST['2nd-Num'];
    $Third_number=$_POST['3rd-Num'];

    if($first_number>$second_number && $first_number>$Third_number && $second_number > $Third_number)
    {
        $maximam=$first_number;
        $manimam=$Third_number;
    }
    else if($first_number > $second_number && $first_number > $Third_number && $second_number < $Third_number)
    {
        $maximam=$first_number;
        $manimam=$second_number;
    } // end with first expecting
    else if($first_number < $second_number && $second_number > $Third_number && $first_number > $Third_number)
    {
        $maximam=$second_number;
        $manimam=$Third_number;
    }
    else if($first_number< $second_number && $second_number > $Third_number && $first_number < $Third_number)
    {
        $maximam=$second_number;
        $manimam=$first_number;
    }  // end with second expecting
    else if($first_number<$Third_number && $second_number < $Third_number && $first_number > $second_number)
    {
        $maximam=$Third_number;
        $manimam=$second_number;
    }
    else
    {
        $maximam=$Third_number;
        $manimam=$first_number;
    }


   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>max number</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
 
</head>
<body>
    <section class="container mt-5 ">
       
<form method="post" class="row g-3 text-center">
   
<span  class="border border-danger p-3">
<h1 class="display-4">Get Max&Min</h1>
<div class="col-md-12 ">

    <label for="inputEmail4" class="form-label">First number</label>
    <input type="number" name="1st-Num" class="form-control" id="inputEmail4">
    
</div>
<div class="col-md-12 mt-3">

    <label for="inputPassword4" class="form-label">Second number</label>
    <input type="number" name="2nd-Num" class="form-control" id="inputPassword4">
    
</div>
<div class="col-md-12 mt-3">
    
    <label for="inputPassword4" class="form-label">Third Number</label>
    <input type="number" name="3rd-Num" class="form-control" id="inputPassword4">
     
</div>

  <div class="col-12 mt-5">
    <button type="submit" class="btn btn-outline-danger col-12">Calculate</button>
  </div>
</span>
</form>

<section class="border rounded-2 bg-danger p-3  col-8 m-auto mt-4 ">
    <h2 class="display-4 text-light">the max Value is : <?php echo $maximam ?? ""; ?></h2>
    <h3 class="display-4 text-light">the min Value is : <?php echo $manimam ?? ""; ?></h3>
</section>

</section>
</body>
</html>