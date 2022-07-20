<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container fs-3'> ";

$name=trim($_POST["name"]);
$email = trim($_POST["email"]);
$errors = [];  # empty array --> I will add the form problems here
$old_data=[];
if(empty($name) or empty($email) or empty($_POST["password"])){
    echo "<h1> Please complete the fields  </h1>";
    if(empty($name)){
        $errors["name"]=true;
    }else{
        $old_data["name"]=$_POST["name"];
    }
    if(empty($email)){
        $errors["email"]=true;
    }else{
        $old_data["email"]=$_POST["email"];
    }
    if(empty($password)){
        $errors["password"]=true;
    }

//    var_dump($errors);
    #### I need to send the errors array to the client
    # represnt the array in a string ---> containing data inform of json object.
    $errors=json_encode($errors);
    $old_data=json_encode($old_data);
//    echo $errors;
    header("Location:registerform.php?errors={$errors}&old_data={$old_data}");
}
else {


    echo "<h1> You have submitted your data </h1>";

    var_dump($_POST);
    $hoppies = "";
    if (isset($_POST["hoppies"])) {
        $hoppies= implode("$", $_POST["hoppies"]);
        echo $hoppies;
    }

    ############# save data in users.txt
    # 1- you need to prepare the data
    $id = rand(0, 10000);
    $userdata = "{$id}:{$_POST['name']}:{$_POST['email']}:{$_POST['password']}:$hoppies\n";
    //var_dump($userdata)
    //echo "<br>".$userdata;
    //exit;
    ######### 2- write the data to the file
    $fileobject = fopen("users.txt", "a");
    fwrite($fileobject, $userdata);
    fclose($fileobject);
    ###################################################
    //echo "<pre>";
    //readfile("users.txt");
    #

    header("Location:allusers.php");
}