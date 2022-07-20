<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container fs-3'> <h1>Delete user </h1>";

# get data from queryString -===> Get
//var_dump($_GET);
$deleteid= $_GET["id"];
# read file content into an array

$users = file("users.txt");  #array
foreach ($users as $i=>$user){
    $userdata=explode(":", $user);
//    var_dump($userdata);
    if ($userdata[0]==$deleteid){
        #delete user from the file
        # 1- remove the line form the array
        $img= trim($userdata[5]);
        if(!empty($img)) {
            unlink(trim($userdata[5], "\n"));
        }
        unset($users[$i]);
        break;
    }
}

//var_dump($users);

### write the data to the file
$fileobj = fopen("users.txt", "w");
foreach ($users as $user){
    fwrite($fileobj, $user);
}

header("Location:allusers.php");






