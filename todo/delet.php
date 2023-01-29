<?php

require "connection.php";


if(isset($_GET['delete_id']))
{
$delete=$conn->prepare("DELETE From task WHERE id =? ");
$delete->bind_param("s",$id);
$id=$_GET['delete_id'];
$delete->execute();

header("location:index.php");   
}


?>