<?php

require "connection.php";
include_once "header.php";

if(isset($_GET['update_id']))
{
$id=$_GET['update_id'];
$data=$conn->query("SELECT * FROM task WHERE id =".$id."");
$alldata=$data->fetch_assoc();


if(isset($_POST['submit']))
{
    $update=$conn->prepare("UPDATE  task SET name = ? WHERE id =".$id."");
    $update->bind_param("s",$name);
    $name=$_POST['task'];
    $update->execute();

    header("location:index.php");

}




}

?>
<div class="container">
  <!-- form start -->
  <form  method="POST" action="update.php?update_id=<?php echo $id;?>" class="form-inline mt-5 col-lg-6 col-md-6 m-auto">
  <?php  csrf_field(); ?>
        <section class="form-group mx-sm-2 mb-2">
          
          <input name="task" type="text" value="<?php echo $alldata['name']; ?>" class="form-control" placeholder="enter task" id="inputpassword2">

        <button type="submit" name="submit" class="btn btn-primary mb-2 mt-2  col-4">UPDATE</button>
        </section>
      </form>
    <!-- form end -->
</div>

    <?php include_once "footer.php";?>