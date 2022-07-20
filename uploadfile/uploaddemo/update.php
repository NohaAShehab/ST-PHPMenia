<?php

//    var_dump($_GET);
//    var_dump($_POST);
//    var_dump($_FILES);

    $updated_user = $_GET["id"];

    ### get image_info ---> $_FILES
    $img=trim($_POST["old_img"], "\n");
    $image_data= $_FILES["image"];
    if(!empty($image_data["name"])){
        $img_name=$image_data["name"];
        $tmp_name=$image_data["tmp_name"];
        ## get image extension
        $ext=pathinfo($img_name, PATHINFO_EXTENSION);
        move_uploaded_file($tmp_name, "profilepicture/{$updated_user}.{$ext}");
        $img=  "profilepicture/{$updated_user}.{$ext}";
    }


    #########################################################
    $users = file("users.txt");  #array
    # 1- get user from the file have the same id
    foreach ($users as $i=>$user){
        $userdata=explode(":", $user);
    //    var_dump($userdata);
        if ($userdata[0]==$updated_user){
            #2- replace its data with new data in the post
            #### join user data again into one string
            $hoppies="";
            if (isset($_POST["hoppies"])){
                var_dump($_POST["hoppies"]);
                # put the array elements in the a string seperated by
                # the seperator you choose $
                $hoppies= implode("$", $_POST["hoppies"]);
                echo $hoppies;
            }
            $data = "{$updated_user}:{$_POST['name']}:{$_POST['email']}:{$_POST['password']}:{$hoppies}:{$img}\n";
            $users[$i]= $data;
            break;

        }
    }
var_dump($users);

# 3- write the new data to file
$fileobj = fopen("users.txt", "w");
foreach ($users as $user){
    fwrite($fileobj, $user);
}

header("Location:allusers.php");


