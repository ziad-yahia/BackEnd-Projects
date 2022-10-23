<?php
if($_POST){
    $the_number=$_POST['the-Num'];
    $the_power=$_POST['the-power'];
    $The_result=log($the_number,$the_power);
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
   
                   <label for="inputEmail4" class="form-label">Enter number</label>
                   <input type="number" name="the-Num" class="form-control" id="inputEmail4">
               
                </div>
                <div class="col-md-12 mt-3">       
   
                   <label for="inputEmail4" class="form-label">Power</label>
                   <input type="number" name="the-power" class="form-control" id="inputEmail4">
               
                </div>
                <div class="col-12 mt-5">
                   <button type="submit" class="btn btn-outline-dark col-12">Check</button>
                </div>
           </span>
           </span>
       </form>    
       <section class="border rounded-2 bg-dark p-3  col-8 m-auto mt-4 ">
           <h2 class="display-5 text-light">The Root Of Number Is  : <?php echo $The_result ?? ""; ?></h2>
       </section>
   
   </section>
</body>
</html>