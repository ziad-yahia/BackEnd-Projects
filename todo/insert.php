<?php
require "connection.php";


if($_SERVER['REQUEST_METHOD'] == "POST")  // isset($_POST['submit'])
{
  // insert into database using prepare
$stmt=$conn->prepare("INSERT INTO task (name) VALUES (?) ");

$stmt->bind_param("s",$name);


$name=$_POST['task'];
$stmt->execute();

header("location:index.php");
}

?>