<?php
session_start();  # to check the session

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container fs-3'> ";

echo "<h1> check login </h1>";

$email=$_POST["email"];
$password=$_POST["password"];

## get data from the file
$allusers =file("users.txt");
$logged_in=false;
foreach ($allusers as $user){
    $user_info = explode(":", $user);
    if ($user_info[2]==$email and $user_info[3]==$password){
        $logged_in=true;
        break;
    }
}

/*
 * each time you login in to the appliction via php --->
 * You can start session between the server and the client
 * Session --> file in the server --> you can use it to store information
 * each time you login to the server from a browser ,
 * session_start();
 * 1- create session_id
 * this session_id value, server use it to create
 * file connect browser with the server
 *2- server save session_id in the client machine(browser) Cookie
 *
 */
if ($logged_in){
    $_SESSION["email"]=$email;
    $_SESSION["name"]=$user_info[1];
    $_SESSION["password"]=$password;
    $_SESSION["login"]=true;
    header("Location:home.php?name={$user_info[1]}");
}else{
    header("Location:login.php");

}

