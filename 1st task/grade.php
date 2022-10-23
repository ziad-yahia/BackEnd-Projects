<?php
if($_POST){
    $PHYSICS=$_POST['PHYSICS'];
    $CHEMISTRY=$_POST['CHEMISTRY'];
    $Biology=$_POST['Biology'];
    $MATHEMATICS=$_POST['MATHEMATICS'];
    $Computer=$_POST['Computer'];
    define("max_grade",100);
    $total_grade=$PHYSICS+$CHEMISTRY+$Biology+$MATHEMATICS+$Computer;
    $percentage=($total_grade/500)* max_grade."%";
    if( $percentage >= 90)
    $grade="A";
    else if($percentage >= 80)
    $grade="B";
    else if($percentage >= 70)
    $grade="C";
    else if($percentage >= 60)
    $grade="D";
    else if($percentage >= 40)
    $grade="E";
    else
    $grade="F";
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<section class="container mt-5 ">
       
       <form method="post" class="row g-3 text-center">
             
           <span  class="border border-dark p-3">
               
                   <h1 class="display-4 text-dark">Get Root Of Numbers </h1>
   
               <div class="col-md-12 ">       
   
                   <label for="inputEmail4" class="form-label">PHYSICS</label>
                   <input type="number" name="PHYSICS" class="form-control" id="inputEmail4">
               
                </div>
                <div class="col-md-12 mt-3">       
   
                   <label for="inputEmail4" class="form-label">CHEMISTRY</label>
                   <input type="number" name="CHEMISTRY" class="form-control" id="inputEmail4">
               
                </div>
                <div class="col-md-12 mt-3">       
   
                <label for="inputEmail4" class="form-label">Biology</label>
                <input type="number" name="Biology" class="form-control" id="inputEmail4">

                </div>
                <div class="col-md-12 mt-3">       
                
                <label for="inputEmail4" class="form-label">MATHEMATICS</label>
                <input type="number" name="MATHEMATICS" class="form-control" id="inputEmail4">

                </div>
                <div class="col-md-12 mt-3">       
   
                <label for="inputEmail4" class="form-label">Computer</label>
                <input type="number" name="Computer" class="form-control" id="inputEmail4">

                </div>
                <div class="col-12 mt-5">
                   <button type="submit" class="btn btn-outline-dark col-12">Check</button>
                </div>
           </span>
           </span>
       </form>    
       <section class="border rounded-2 bg-dark p-3  col-8 m-auto mt-4 ">
           <h2 class="display-5 text-light">The Percentage Is  : <?php echo $percentage  ?? ""; ?></h2>
           <h3 class="display-4 text-light">the Grade is : <?php echo $grade ?? ""; ?></h3>

       </section>
   
   </section>
</body>
</html>