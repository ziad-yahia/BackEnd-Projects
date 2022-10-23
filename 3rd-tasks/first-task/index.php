<?php 

$categories = [
   [
    "name"=>"laptop",
    "price"=>["20000","15000","12000"],
    "img"=>"./images/pexels-hasan-albari-1229861.jpg"
   ],
   [
    "name"=>"phone",
    "price"=>["12000","13000"],
    "img"=>"./images/pexels-pixabay-163065.jpg"
   ],[
    "name"=>"Tv",
    "price"=>["15000","12000"],
    "img"=>"./images/pexels-burak-the-weekender-704555.jpg"
   ],
   
];


$title="index";

include_once "./layouts/header.php" ;
include_once "./layouts/navbar.php" ;

?>

<div class="container mt-5 p-5 ">
    <div class="row ">

<?php

if($categories){
foreach($categories as $index   => $value) { ?>

    <div class="card col-md-4" style="width: 18rem;">
  <img src="
    <?php
    if($value['img'] )
    echo "{$value['img']}";
    ?>
  " class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">
        <?php 
        
       
           if($value['name']){
            echo "{$value['name']}";
           }
           
        
       
        
      
        ?>
    </h5>
    <p class="card-text">
        <?php 
       
            foreach($value as $key => $innervalue)
            { 

            if(gettype($innervalue) =="array" ){
                foreach($innervalue as $index => $indexarry){
                   echo  "{$indexarry} <br>";
                }
            }
               
            }
      
        ?>      
    </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php } 
}//end if condition
else{
    echo "There is  no product now we Will add";
}

?>
</div>
</div>


<?php 

include_once"./layouts/scripts.php";

?>