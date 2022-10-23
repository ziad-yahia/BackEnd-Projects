<?php

$title = "supermarket";

include_once "./layouts/header.php";

// if ($_SERVER["REQUEST_METHOD"] == "POST"  && !empty($_POST) ){

   

//     $errors=[];
//     if(empty($_POST['username'])){

//         $errors['usernameError']="<p class='text-danger font-weight-bold'>* User Name Is Requierd</p>";
//     }
   
//     if(empty($_POST['VarietiesNumber'])) {
//         $errors['VarietiesNumber']="<p class='text-danger font-weight-bold'>*Number Of Varieties IS Requierd</p>";
//     }

// }



function drawtable($numberofrows){

    $table='<table class="table table-dark">

    <thead>
        <tr>
            <th>products</th>
            <th>price</th>
            <th>quantity</th>
        </tr>
    </thead>
    <tbody>';

    for($i=1;$i <= $numberofrows ;$i++)
    {
        $table.='

        <tr>
        <th><input type="text" name="product_name" class="form-control"></th>
        <th><input type="number" name="product_price" class="form-control"></th>
        <th><input type="number" name="product_quantity" class="form-control"></th>
        </tr>

        ';
    }

  $table.='</tbody>
    
    </table>

    <div class="form-group"> 
    <button   class="btn btn-outline-dark col-md-12 form-control" name="show_check">PILL</button>
    </div>
     ';
    return $table;


}


function checkpill(array $data):string
{
    print_r($data); die;
    $table='<table class="table table-dark">

    <thead>
        <tr>
            <th>products</th>
            <th>price</th>
            <th>quantity</th>
        </tr>
    </thead>
    <tbody>';

    for($i=1;$i <= $data['VarietiesNumber'] ;$i++)
    {
       
        $table.='

        <tr>
        <th><input type="text" name="product_name" class="form-control"></th>
        <th><input type="number" name="product_price" class="form-control"></th>
        <th><input type="number" name="product_quantity" class="form-control"></th>
        </tr>

        ';
    }

  $table.='</tbody>
    
    </table>
    
     ';
    return $table;

}




?>

<style>
    * {
        padding: 0%;
        margin: 0%;
    }

    .image {
        background: url('images/2011.i003.013_shopping bag basket zero waste eco illustration.jpg') no-repeat center/cover;
        /* min-width:450px; */
        min-height: 250px;
    }
</style>

<section class="container mt-5">

    <div class="col-md-12 h1 text-center font-weight-blod text-primary">
        SuperMarket
    </div>

    <div class="d-flex justify-content-between mt-5">
        <section class="image col-md-6"></section>

        <section class="col-md-6 ">
            <form class="border border-primary p-4 mt-5" method="post">

                <div class="form-group ">

                    <label for="exampleInputEmail1" class="font-weight-bold">User Name</label>
                    <input type="text" name="username" value="<?php echo $_POST['username'] ?? ""; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <?php echo $errors['usernameError']?? ""; ?>
                </div>
             
                <div class="input-group mb-3">
                     
                    <select name="Cites" class="custom-select" id="inputGroupSelect02">
                        <option <?php isset($_POST['Cites']) && $_POST['Cites']== 'Cairo' ? 'selected' : "";  ?> value="Cairo">Cairo</option>
                        <option <?php isset($_POST['Cites']) && $_POST['Cites']== 'Alex' ? 'selected' : "";  ?> value="Alex">Alex</option>
                        <option <?php isset($_POST['Cites']) && $_POST['Cites']== 'Giza' ? 'selected' : "";  ?> value="Giza">Giza</option>
                        <option <?php isset($_POST['Cites']) && $_POST['Cites']== 'Others' ? 'selected' : "";  ?> value="Others">Others</option>

                    </select>
                    

                </div>
                <div class="form-group ">

                    <label for="exampleInputEmail1" class="font-weight-bold">Number Of Varieties</label>
                    <input type="number" name="VarietiesNumber" value="<?php echo $_POST['VarietiesNumber'] ?? ""; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <?php echo $errors['VarietiesNumber']?? ""; ?>

                </div>
                <div class="form-group"> 
               <button  name="enter_products" class="btn btn-outline-dark col-md-12 form-control">Enter Products</button>
                </div>
                <!-- enter_products -->
            </form>

        </section>



    </div>
</section>


<section class="container mt-5">
   
   

  
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" ){

if(isset($_POST['enter_products']))
{
  echo drawtable($_POST['VarietiesNumber']);
}

if(isset($_POST['show_check']))
{
  echo checkpill($_POST);
}


}



?>
</section>



<?php

include_once "./layouts/scripts.php";

?>