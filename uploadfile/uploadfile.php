<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container fs-3'> </pre> ";

    echo "<h1> Welcome to upload file</h1>";
    print_r($_POST);

    echo "<br> <p> the file information will be found in $ _ FILES</p>";
//    var_dump($_FILES["image"]);

    ### get file info
    $filename=$_FILES["image"]["name"];
    $tmp_name= $_FILES["image"]["tmp_name"];
    $filesize = $_FILES["image"]["size"];
//    var_dump($filename, $tmp_name, $filesize);

    ###### I need to move the file from the tmp_name to the filesfolder
    move_uploaded_file($tmp_name, "files/{$filename}");


?>

<div class="card" style="width: 18rem;">
    <img src="<?php echo "files/{$filename}"; ?>" class="card-img-top" alt="...">
</div>
