<?php


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
    ],
    
    
];


if($users){
$table = "
<table class='table'>
  <thead> <tr> ";
   
    
      
      foreach($users[0] as $name => $value){
          $table.=" 
         
          <th scope='col'>{$name}</th>     
          
          ";
      }
   $table.=" </tr>
  </thead>
  <tbody> ";

      foreach($users as $user){

        $table.="
        <tr>     ";
     
        foreach($user as $property => $value ){

            $table.="<td>";
            if(gettype($value) == "array" or gettype($value) == "object")
            {
                foreach($value As $arrorobjectkey => $arrorobjectvalue){
                                  
                    if($property =="gender" && $arrorobjectkey=='gender' ){

                        if ($arrorobjectvalue=='m')
                        $arrorobjectvalue="male";
                    }   
                  

                            $table.="{$arrorobjectvalue} <br>";
                }

            }else{
                $table.=$value;
            }
            
           $table.=" </td>";
        } 
      

         
        
        
       
        

      }

    $table.="</tr>
  </tbody>
</table>
";
}else{
    $table.="";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
    <?php echo "{$table}"; ?>
</body>

</html>