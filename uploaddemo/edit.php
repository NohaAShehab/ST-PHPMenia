<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container fs-3'> <h1>Edit </h1>";
$edited_user_id= $_GET["id"];


# 1- get user from the user
    ## connect to the database
    include("connect_to_db.php");

# 2- select the user from the database
$sel_query="Select * from `menia_users`.`users` where id=:id";
$stmt = $db->prepare($sel_query);
$stmt->bindParam(":id",$edited_user_id);
$res = $stmt->execute();
$userdata=$stmt->fetch(PDO::FETCH_ASSOC);
//

$reading = false;
$sleeping = false;
//var_dump($userdata[4]);
if ($userdata["hoppies"]){
    $hoppies = $userdata["hoppies"];
    $hoppies =trim($hoppies, "\n");
    $hoppies= explode("$", $hoppies);
    foreach ($hoppies as $hoppy){
        if ($hoppy === "reading"){
            $reading= true;
        }elseif ($hoppy ==="sleeping"){
            $sleeping= true;
        }
    }

}
//var_dump($edited_user);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1> Edited user </h1>
    <form method="POST" action="update.php?id=<?php echo $userdata['id']; ?>"
          enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" value="<?php echo $userdata['name']; ?>"
                   name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email"   value="<?php echo $userdata['email']; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" name="password"  value="<?php echo $userdata['password']; ?>" class="form-control" >
        </div>
        <div class="mb-3">
            <input type="hidden" name="old_img" value="<?php echo $userdata['profile_pic']?>">
            <img src="<?php echo $userdata['profile_pic']?>" width="100" height="100">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Please choose profile picture </label>
            <input class="form-control" type="file" name="image" id="formFile">
        </div>

        <div class="mb-3">
            <label> Hoppies </label>

            <div class="form-check">
                <?php
                    if ($reading){
                        echo '<input class="form-check-input" type="checkbox" name="hoppies[]" value="reading" checked >';
                    }else{
                        echo '<input class="form-check-input" type="checkbox" name="hoppies[]" value="reading">';

                    }
                ?>
                <label class="form-check-label" >
                    Reading
                </label>
            </div>
            <div class="form-check">
                <?php
                if ($sleeping){
                    echo '<input class="form-check-input" type="checkbox" name="hoppies[]" value="sleeping" checked >';
                }else{
                    echo '<input class="form-check-input" type="checkbox" name="hoppies[]" value="sleeping">';

                }
                ?>
                <label class="form-check-label" >
                    Sleeping
                </label>
            </div>
        </div>




        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

