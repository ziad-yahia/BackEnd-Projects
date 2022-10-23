<?php
$title="Club";
include_once"./layouts/heder.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"  && !empty($_POST) ){



    $errors=[];
    if(empty($_POST['username'])){

        $errors['usernameError']="<p class='text-danger font-weight-bold'>* User Name  Is Requierd</p>";
    }
   
    if(empty($_POST['familymember'])) {
        $errors['familymembererror']="<p class='text-danger font-weight-bold'>*Family member-count IS Requierd</p>";
    }
    if(empty($errors)){

        if(!empty($_POST['username'] && !empty($_POST['familymember'])) ){
            $_SESSION['username']=$_POST['username'];
             $_SESSION['familycount']=$_POST['familymember'];
              header('location:member.php');
        }
       
        // $errors['alliserror']="<p class='text-danger font-weight-bold'>*Data IS Requierd</p>";
    }

    // define("subscribe",10000);
    // define("familymembercost",2500);
    // $total_subscribe=subscribe+(familymembercost * $_POST['familymember']);
    // $_SESSION['total-club-subscribtion']=$total_subscribe;

}

?>

<style>
    * {
        padding: 0%;
        margin: 0%;
    }

    .image {
        background: url('images/3527154.jpg') no-repeat center/contain;
        /* min-width:450px; */
        min-height: 250px;
    }
</style>
<section class="container mt-5">

    <div class="col-md-12 h1 text-center font-weight-blod text-warning">
        Club
    </div>

    <div class="d-flex justify-content-between mt-5">
        <section class="image col-md-6"></section>

        <section class="col-md-6 ">
            <form  method="post">
                  
                <div class="form-group ">

                    <label for="exampleInputEmail1" class="font-weight-bold">User Name</label>
                    <input type="text" name="username" value="<?php echo $_POST['username'] ?? ""; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small class="text-warning ">Club Subscription Start With 10.000LE.</small>
                    <?php echo $errors['usernameError']?? ""; ?>
                   
                </div>
                <div class="form-group ">

                    <label for="exampleInputEmail1" class="font-weight-bold">Family Members Count</label>
                    <input type="number" name="familymember" value="<?php echo $_POST['familymember'] ?? ""; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small class="text-warning ">Cost Of Each Member Is 2.500LE.</small>
                    <?php echo $errors['familymembererror']?? ""; ?>

                </div>
                <button type="submit" class="btn btn-outline-warning col-md-12 ">subscribe</button>

            </form>

        </section>



    </div>
</section>
<?php 
include_once"./layouts/scripts.php";
?>