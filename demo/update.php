<?php

    var_dump($_GET);
    var_dump($_POST);
    $updated_user = $_GET["id"];

    $users = file("users.txt");  #array
    # 1- get user from the file have the same id
    foreach ($users as $i=>$user){
        $userdata=explode(":", $user);
    //    var_dump($userdata);
        if ($userdata[0]==$updated_user){
            #2- replace its data with new data in the post
            #### join user data again into one string
            $data = "{$updated_user}:{$_POST['name']}:{$_POST['email']}:{$_POST['password']}\n";
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


