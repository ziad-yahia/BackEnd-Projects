<?php


$file_dir="uploads/";

$target_file=$file_dir . basename( $_FILES["fileToUpload"]["name"] );

$uploadok=1;

$imagefiletype= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"]))
{

    $check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false)
    {
        if(file_exists($target_file))
        {
            echo "This image already exists";
            $uploadok=0;
            die;
        }

        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);

        echo "image uploaded successfully";

        $uploadok=1;
    }else{
    echo "sorry this is not image";
    
    $uploadok=0;
    }

}





















/*
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadok = 1;

$imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if ($check !== false) {
        if (file_exists($target_file)) {
            echo "sorry file already exist";
            $uploadok = 0;
            die;
        }

        // #move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
        echo "uploaded successfully" . "   " . $check["mime"] . ".";
        $uploadok = 1;
    } else {
        echo "file is not image";
        $uploadok = 0;
    }
}
*/