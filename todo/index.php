
  <?php

  require "connection.php";
  include_once "header.php";
 

  
  ?> 


  <div class="container">
     <!-- form start -->
      <form  method="POST" action="insert.php" class="form-inline mt-5 col-lg-6 col-md-6 m-auto">
        <?php  csrf_field(); ?>
        <section class="form-group mx-sm-2 mb-2">
          
          <input name="task" type="text" value="" class="form-control" placeholder="enter task" id="inputpassword2">
        
        <button type="submit" name="submit" class="btn btn-primary mb-2 mt-2  col-4">INSERT</button>
        </section>
      </form>
    <!-- form end -->

  
    <!-- table start -->
    <table class="table table-dark table-striped text-center ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Task Name</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php 

    // pull data from database
     //fetch_assoc() function make all data as associative array
     $data=$conn->query("SELECT * FROM task");
    while($alldata=$data->fetch_assoc())
    {
   
  
    ?>
    <tr>
  
    
      <th scope="row"><?php echo $alldata["id"];  ?></th>
      <td><?php echo $alldata["name"] ; ?></td>
      <td>
        <a href="delet.php? delete_id=<?php echo $alldata["id"]; ?>" class="btn btn-outline-danger">Delete</a>
        <a href="update.php? update_id=<?php echo $alldata["id"] ; ?>" class="btn btn-outline-warning">Update</a>
       </td>

    </tr>
      <?php } ?>
  </tbody>
</table>
    <!-- table end -->
    </div>
<?php include_once "footer.php"; ?>