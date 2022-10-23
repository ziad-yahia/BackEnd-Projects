<?php

// dynamic table
// dynamic rows //4 
// dynamic columns // 4
// check if gender of user == m ==> male // 1
// check if gender of user == f ==> female // 1

$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[//object
            'gender' => 'm'
        ],
        'hobbies' => [//index array
            'football', 'swimming', 'running'
        ],
        'activities' => [ // associative array
            "school" => 'drawing',
            'home' => 'painting'
        ],
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],(object)[
        'id' => 4,
        'name' => 'ziad',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],(object)[
        'id' => 5,
        'name' => 'hussan',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],(object)[
        'id' => 6,
        'name' => 'osama',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'running',"read story"
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    
];

$Table_Head_array=[
    "first_row" =>"STUDENT-ID",
    "second_row"=>"STUDENT-Name",
    "third_row"=>"STUDENT-GENDER",
    "fourth_row"=>"STUDENT-HOBBIES",
    "fifth_row"=>"STUDENT-ACRIVITIES:HOME&SCHOOL"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dinamic tables</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>

<table class="table table-primary table-hover  table-striped">
<thead>
<tr>
    <?php foreach($Table_Head_array As $index => $value){ ?>
   
      <th scope="col"><?php echo "{$value}"; ?></th>
    

    
    <?php } ?>
</tr>
  </thead>

  <tbody >

  

  <tbody >

  

<?php foreach($users As $key ){ ?>

    

    <tr>
    <th scope='col'><?php   echo "{$key->id}"; ?></th>
    <td scope='col'><?php echo "{$key->name}" ?></td>
    <td><?php
    if($key->gender->gender == 'm'){
        echo "Male";
    }else{
        echo "Female";
    }
      ?>
     </td>
     <td>
    <?php 
    foreach($key->hobbies As $hobby){
        echo $hobby . '<br>';
    }
   
    
    ?>

    </td> 
    
    <td>
    <?php
    foreach($key->activities as $activitie){
        echo " {$activitie} <br>";
    }
     
    ?>
    </td>
    
    </tr>
    
    
<?php }?>

</tbody>
</table>


</body>

</html>