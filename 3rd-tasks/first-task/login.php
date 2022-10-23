<?php



$users=[
    [
        "id"=>1,
        'name'=>"Ziad",
        "email"=>"ziad@gmail.com",
        "passwprd"=>"20-00426",
        'gender'=>"m",
    ],[
        
        "id"=>2,
        'name'=>"mustafa",
        "email"=>"mustafa@gmail.com",
        "passwprd"=>"20-00426",
        "gender"=>"m",
    ],[
        
        "id"=>3,
        'name'=>"yahia",
        "email"=>"yahia@gmail.com",
        "passwprd"=>"20-00426",
        "gender"=>"m",
    ],
    [
        
        "id"=>4,
        'name'=>"shimaa",
        "email"=>"shima@gmail.com",
        "passwprd"=>"20-00426",
        "gender"=>"f",
    ]
];

$title = "login";    //must assigned title to avoid errors  

include_once "./layouts/header.php";

// avoid someone enter his email to go login page
if(!empty($_SESSION['user'])){
    // check authenticated user
    header('location:index.php');
    die;
}
include_once "./layouts/navbar.php";



if( $_SERVER["REQUEST_METHOD"] == "POST"  && !empty($_POST) ){

 

    //form validate
    $errors=[];
    
    if(empty($_POST['email'])){

        $errors['email']="<h1 class='text-danger font-weight-bold'>* Email is requierd</h1>";
    }
    if(empty($_POST['password'])){

        $errors['password']="<h1 class='text-danger font-weight-bold'>* password is requierd</h1>";
    }
    // no validating errors
    if(empty($errors)){
        foreach($users as $user){
            if($_POST['email']==$user['email'] && $_POST['password']==$user['passwprd']){

                $_SESSION['user']=$user;
                header('location:index.php');
                die;
            }
        }

        $errors['email-passsword']="<h1 class='text-danger font-weight-bold'>* invalid Email Or Password  </h1>";
    }

}

?>






<div class="container">

    <form class="border border-primary p-4 mt-5"  method="post">
        
        <div class="form-group text-center">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" value="<?php echo $_POST['email'] ?? ""; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!--  print errors if found use null operator ?? -->
            <?php  echo $errors['email'] ?? "";  ?>
            <?php echo $errors['email-passsword'] ?? ""; ?>

        </div>
        <div class="form-group text-center">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" value="<?php echo $_POST['password'] ?? ""; ?>" class="form-control" id="exampleInputPassword1">
            <!--  print errors if found use null operator ?? -->
            <?php echo  $errors['password'] ?? "" ;  ?>
        </div>

        <button type="submit" class="btn btn-outline-dark col-md-12">Submit</button>

    </form>

</div>
<!-- <?php //echo $users[0]['gender'] ;?> -->


<?php
include_once "./layouts/footer.php";
include_once "./layouts/scripts.php";
?>