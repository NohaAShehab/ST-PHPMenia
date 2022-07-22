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

    $errors=json_encode($errors);
    $old_data=json_encode($old_data);
    header("Location:registerform.php?errors={$errors}&old_data={$old_data}");
}
else {


    echo "<h1> You have submitted your data </h1>";

    $hoppies = "";
    if (isset($_POST["hoppies"])) {
        $hoppies= implode("$", $_POST["hoppies"]);
    }

    $timestamp =time();
    $img= "";
    #### get the image information

    $image_data= $_FILES["image"];
//
    if(!empty($image_data["name"])){
        $img_name=$image_data["name"];
        $tmp_name=$image_data["tmp_name"];
        $ext=pathinfo($img_name, PATHINFO_EXTENSION);
        move_uploaded_file($tmp_name, "profilepicture/{$timestamp}.{$ext}");
        $img=  "profilepicture/{$timestamp}.{$ext}";
    }

    ############# save data in database
    ### 1- connect
    $db_user="phpluxor";
    $db_password="Iti123456789_";
    $db_name="menia_users";
    $dsn="mysql:dbname={$db_name};host=127.0.0.1;port=3306;";
    $db= new PDO($dsn, $db_user, $db_password);

    ### 2- write the query
    $inst_query= "Insert into `menia_users`.`users`(`name`, `email`,`password`, `profile_pic`,`hoppies`)
    values (:username, :useremail, :userpassword, :profile_pic, :hoppies)";
//    header("Location:allusers.php");

    $stmt = $db->prepare($inst_query);
    $stmt->bindParam(":username",$_POST["name"] );
    $stmt->bindParam(":useremail",$_POST["email"] );
    $stmt->bindParam(":userpassword",$_POST["password"] );
    $stmt->bindParam(":profile_pic",$img );
    $stmt->bindParam(":hoppies",$hoppies);

    $res=$stmt->execute();
    var_dump($db->lastInsertId());
    var_dump($stmt->rowCount());

}