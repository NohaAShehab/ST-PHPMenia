<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
    echo "<div class='container fs-3'>";
    echo "<h1 style='text-align: center'> Scopes  </h1>";

//    echo "<li> Global scope</li>";
//    /**
//     * when you define a variable in the global scope , you can access it
//     * anywhere in the script except from inside the function
//    */
//    $name = "Ali";
//    print($name);
//    echo "<p>Your name is {$name}</p>";
//
//
//    echo "<li> Global scope  with function </li>";
//
//    function sayHello(){
//        # block contain lines of code ---> you can use it sever time
//        print('<h2 style="color: darkred"> Hello World </h2>');
//
//        print_r($name);
//    }
//
//    sayHello();
////
////    sayHello();
////
////    sayHello();
////
////    print('<h2 style="color: darkred"> -=========================================</h2>');
////    sayHello();
////    sayHello();
//
//    ################################################################################
//    echo "<li> Access the global variable from a function using global keyword  </li>";
//
//    function test(){
//        global $name;
//        echo "<p style='font-size: larger; color: coral;'>Name = {$name} </p>";
//    }
//
//
//    test();
//
//echo "</div>";
################## Local scope , paramter scope#################
    echo "<li> Local scope  </li>";

    /**
     * Any varibale defined inside the function is considered to
     * have local scope, the varaible only accessed in the function
    */

//    function myfunction(){
//        $course = "PHP";
//        echo "<h2> {$course} </h2>";
//    }
//    myfunction();
//
//    echo "course:  {$course}";

    ############## parameter scope ### local scope

//    function addnums($x, $y){
//        echo "x= {$x},y = {$y} ";
//    }
//
//    addnums(5, 6);
//
//    echo $x;

    #################### static scope
    echo "<li>Static scope</li>";
    /*
     * static variable will be destroyed after the function finished,
     * you access it only inside the function

     ***/


//    function sayHello($name){
//        static $count = 0;
//        $count = $count+1;
//        echo "<h3 style='color: purple'> Hello {$name} {$count} </h3>";
//
//    }
//sayHello("Noha");  #1
//sayHello("Ahmed");  # 2
//
//sayHello("Mostafa");  # 3

//    ######################### superglobl
//    echo "<li> Super global scope</li>";
//    /*
//     *  $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_FILES
//     * can be accessed anywhere in the script
//     * **/
//
//    $_GET["myname"] = "Noha";
//    var_dump($_GET);
//
//
//    function test(){
//        echo $_GET["myname"];
//    }
//
//    test();

    ############################## constant
    echo "<li> Constant scope</li>";

    const branch = "menia";
    /*
     * constant name doesnt's start with $
     * constant value is accessed anywhere in the script , inside in functions
     * constant value cannot be changed
     * **/

//    echo branch;
//
//    function testConstant(){
//        echo "<br>";
//        echo branch;
//    }
//    testConstant();
//
//
// ----- GLOBAL SCOPE , PARAMETE

    $x=10;

    function addnums($x, $y, $z){
        echo "<h1> x= {$x}, y = {$y}, z= {$z}</h1>";
        global $x;
        echo "<h1> x= {$x}, y = {$y}, z= {$z}</h1>";
        $x ++;
    }

    addnums("Ahmed", "Ali", "Test");

    echo $x;


















































echo "</div>";