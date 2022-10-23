<?php
$title="Profile";
include_once"./layouts/header.php";
if(empty($_SESSION['user'])){
    header('location:login.php');
    die;
}
//validation
if($_SERVER["REQUEST_METHOD"] == "POST"  && !empty($_POST)){

    $errors=[];
    if(empty( $_POST['name'])){
        $errors['name']="<p class='text-danger font-weight-bold'>* name is requied</p>";
    }
    if(empty( $_POST['email'])){
        $errors['email']="<p class='text-danger font-weight-bold'>* email is requied</p>";
    }
    if(empty($errors))
    {
        $_SESSION['user']['name']=$_POST['name'];
        $_SESSION['user']['email']=$_POST['email'];
        $updatemassage=  "<p class='alert alert-success'>!Data Updated Successfully</p>";
    }
}

include_once"./layouts/navbar.php";

?>

<div class="container">
    <div class="col-12 text-center h1 text-dark mt-5">
        my account
    </div>
    <div class="col-12 ">
        <?php echo $updatemassage ?? ""  ; ?>
    </div>
    <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address :</label>
    <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['user']['email']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
    <?php echo $errors['email'] ?? "" ?>
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name :</label>
    <input type="text" name="name" value="<?php echo $_SESSION['user']['name']; ?> " class="form-control" id="exampleInputPassword1">
        <?php echo $errors['name'] ?? "" ?>
</div>
  <!-- == 'm' ? "selected" : "" -->
 
  
  <button type="submit" class="btn btn-outline-dark col-md-12 mt-5">Update</button>
</form>
</div>

<?php
include_once"./layouts/footer.php";
include_once"./layouts/scripts.php";

?>