<?php
session_start();
### I need to use session info


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container fs-3'> ";

if (isset($_SESSION["login"])){
    if ($_SESSION["login"]){
        echo "welcome to {$_SESSION['name']} Home page";

        echo "<br> <p> <a href='logout.php' class='btn btn-danger'> Log out</a> </p>";
    }
}else{
    header("Location:login.php");
}


# no one can enter this page unless he logged in ###
# 1- define the login page

