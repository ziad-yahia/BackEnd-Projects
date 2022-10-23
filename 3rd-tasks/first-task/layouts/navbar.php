<?php 
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      
     
  <?php  if(empty($_SESSION['user'])) 
    {   ?>
        <!-- if true mean user doesnt make sign in -->
         <li class="nav-item dropdown active   ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          sign-in Now!
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Register</a>
        
   <?php }else{ ?>
        <!--  false mean user sign in -->

        <li class="nav-item dropdown active   ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
        <?php  echo $_SESSION['user']['name'];  ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php">profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">logout</a>
         
        
        </div>
      </li>
         
        
        </div>
      </li>

   <?php } ?>
      
    </ul>
   
  </div>
</nav>
