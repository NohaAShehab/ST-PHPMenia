<?php
    require ('connect_to_db.php');
    $updated_user = $_GET["id"];

    # get the user from the datbase
    $hoppies = "";
    if (isset($_POST["hoppies"])) {
        $hoppies= implode("$", $_POST["hoppies"]);
    }

    ### get image_info ---> $_FILES
    $img=trim($_POST["old_img"], "\n");
    $timestamp = time();
    $image_data= $_FILES["image"];
    if(!empty($image_data["name"])){
        $img_name=$image_data["name"];
        $tmp_name=$image_data["tmp_name"];
        ## get image extension
        $ext=pathinfo($img_name, PATHINFO_EXTENSION);
        move_uploaded_file($tmp_name, "profilepicture/{$timestamp}.{$ext}");
        $img=  "profilepicture/{$timestamp}.{$ext}";
    }



    #########################################################
    $update_query="update `menia_users`.`users`  set `name`=:username, `password`=:userpassword, 
    `email`=:email, `profile_pic`=:image, `hoppies`=:userhoppies where id=:id";

    $stmt = $db->prepare($update_query);
    $stmt->bindParam(":username",$_POST["name"]);
    $stmt->bindParam(":userpassword",$_POST["password"]);
    $stmt->bindParam(":email",$_POST["email"]);
    $stmt->bindParam(":image",$img);
    $stmt->bindParam(":userhoppies",$hoppies);
    $stmt->bindParam(":id",$updated_user);

    $res = $stmt->execute();
    var_dump($res);

    if($res){
        header("Location:allusers.php");
    }





