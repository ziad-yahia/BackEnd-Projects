<?php 
$title="Result";
include_once"./layouts/heder.php"; 
?>

<?php

 
 
 foreach($_SESSION["memberusername"] as $key => $value){
    echo $value . "<br>";
 }
foreach($_SESSION['playvalue'] as $value){
    echo $value ;
}

?>

<?php include_once"./layouts/scripts.php" ?>