<?php
if($_POST){
    $first_Num=$_POST['first-Num'];
    $Second_Number=$_POST['Second-Number'];

   switch($_POST['operation']){
    case 'add':
            $total=$first_Num+ $Second_Number;
            break;
    case 'subtraction':
            $total=$first_Num - $Second_Number;
            break;
    case 'multipy':
            $total=$first_Num * $Second_Number;
            break;
    case 'divison':
            $total=$first_Num / $Second_Number;
            break;
                
            
   }
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
               
                   <h1 class="display-4 text-dark">Calculator </h1>
   
               <div class="col-md-12 ">       
   
                   <label for="inputEmail4" class="form-label">First Number</label>
                   <input type="number" name="first-Num" class="form-control" id="inputEmail4">
               
                </div>
                <div class="col-md-12 mt-3">       
   
                   <label for="inputEmail4" class="form-label">Second Number</label>
                   <input type="number" name="Second-Number" class="form-control" id="inputEmail4">
               
                </div>
                <div class="col-md-12 mt-5">
                    <select name="operation" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="add">+</option>
                    <option value="subtraction">-</option>
                    <option value="multipy">*</option>
                    <option value="divison">/</option>
                    </select>
                </div>
                <div class="col-12 mt-5">
                   <button type="submit" class="btn btn-outline-dark col-12">Check</button>
                </div>
           </span>
           </span>
       </form>    
       <section class="border rounded-2 bg-dark p-3  col-8 m-auto mt-4 ">
           <h2 class="display-5 text-light">The calc Operation Is  : <?php echo $total ?? ""; ?></h2>
       </section>
   
   </section>
</body>
</html>