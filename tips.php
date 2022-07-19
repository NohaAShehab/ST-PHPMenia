<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container fs-3'>";

 # --------------------------------------------------------------------------------------------------
//    echo "<li> Function doesn't return something --> return Null</li>";
//    function addnums($x, $y){
//            echo "<p> x= {$x}, y = {$y}";
//            $z = $x + $y ;
//            echo "<p> result = {$z} <p></p>";
//        }
//
//    $res = addnums(4,5);
//    var_dump($res);
//
//    echo "<li> Function return something --> return somehting </li>";
//    function sumnum($x, $y){
//        echo "<p> x= {$x}, y = {$y}";
//        $z = $x + $y ;
//        echo "<p> result = {$z} <p></p>";
//        return $z;
//    }
//
//    $res2 = sumnum(4,5);
//    var_dump($res2);
# -----------------------------------------Echo , print ---------------------------------------------------------
    echo "<li> Echo, Print</li> <pre> ";
    $x = 10; $name="Ahmed";
    $course = "PHP";

    echo $x, $name, $course ;
    $arr = [4,5,6,7];
    echo $arr;
    ## print like echo ,print only print the value of one variable
    echo "<br>";
    print( $x) ;

    # to print an array use print_r
    echo "<br>";
    print_r($arr);


echo "</div>";