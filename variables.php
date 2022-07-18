<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container fs-3'>";
    echo "<h1 style='text-align: center'> PHP variables </h1>";


    # 1- define my first varaible
    $name = "Ahmed";

    echo $name;

    $Name = "Ali";

    echo "<p> {$name}  {$Name} </p>";

    $course1 = "Mysql";

    echo "<p> {$course1}</p>";

    $test ;

    # to define variable $varname=value
    /**
     * php is loosly - dymamically typed lang.
     * php detect the datatype of the variable in the runtime according to the data
     * you can change type of the variable in the run time

     */
    $test = "abc";  #string
    echo $test;
    $test = 10;  # int
    echo $test;











    echo "</div>";
