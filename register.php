<?php

    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
    echo "<div class='container'>";
//
//    echo "<h1> register page </h1>";
//
//    echo "<p> You have submitted data as  </p>";

    /*
     * if you sent the data using get method , you will find
     * the data you sent in variable $_GET ==> Special variable
     * or you can find it in $_REQUEST
     */
     // print any value of varibale
    var_dump($_GET);



/*
 * if you sent the data using POST method , you will find
 * the data you sent in variable $_POST ==> Special variable
 * or you can find it in $_REQUEST
 */
// print any value of varibale
//    var_dump($_POST);
//    var_dump($_REQUEST);  # find data sent with request through get or post
//

    /*
     * $_GET , $_POST, $_REQUEST ---> Array contains the data  sent by the form
     * to access elements of the array
    */


    echo "<h1> Thank you for submitting your data </h1>";

    echo "<p> your name is ";
    echo $_GET["name"];
    echo "</p>";


    echo "<p>Your email is {$_GET['email']} </p>";

    echo "<p> Your password  {$_GET['password']} </p>";









echo "</div>";



