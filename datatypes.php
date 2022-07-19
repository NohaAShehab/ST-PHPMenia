<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container fs-3'> <pre>";


# ------------------ data types
$name= "iti";   # string
# to get the type of any varaible
//var_dump($name);
//
//echo gettype($name);

# --- you can convert between the different datatype
//    $num= "10";  #string
//    echo "<br> $num ", gettype($num);
//    # convert string to int
//    $num =(int)$num;
//    echo "<br> $num ", gettype($num);

    #####
//    $message = "Hello";
//    echo "<br> $message", gettype($message);
//    $message =(int)$message;  # 0
//    echo "<br> $message ", gettype($message);


//$message = "5Hello";
//echo "<br> $message", gettype($message);
//$message =(int)$message;  # 0
//echo "<br> $message ", gettype($message);
//
//
//$message = "Hello5";
//echo "<br> $message", gettype($message);
//$message =(int)$message;  # 0
//echo "<br> $message ", gettype($message);

    #########33 change type
//    $num = 100;
//    settype($num, "float");
//    print(gettype($num));

    ################################### operators
//    $x = 10;
//    $y = 5;
//    $z = $x * $y;
//    echo $z;

    #################### dot operator  --> concatenation between 2 strings
//    $message1 = "Hello";
//    $message2 = "World";
//    $msg = $message1." ".$message2;
////    echo $msg;
//
//    $name= "Noha";
//    $companyname = "iti";
//    echo "My name is ".$name." I works at " .$companyname;
    ####################333 comparison operators
//    $x = 10;
//
//    $y = "10";

//    var_dump($x==$y);  #check the value inside the variable
//    var_dump($x===$y);  # identical , check value and the datatype

//
//    $z = $x;
//
//    var_dump($z);
//    var_dump($x);
//
//    $x = $x+1;
//    var_dump($x);
//    ### combined operators
//    $x +=1;
//    var_dump($x);
//
//    $m = "Hello";
//
//    $m .=" World";
//    var_dump($m);


    ################ pre and post increment

//    $x = 10;
//    echo $x++; # print 10 , $x=11;

//
//    $y=5;
//    echo ++$y;  # $y=6, print 6
//


//    $m = 10;
//    $n = $m;
//
//    var_dump($m, $n);
//
//    $m +=1;
//    var_dump($m, $n);

//    # reference operator
//    $m =10;
//    $n= &$m;
//
//    var_dump($m, $n);
//
//    $m++;
//    var_dump($m, $n);
//
//    $n= "Ahmed";
//    var_dump($m, $n);




    echo "<li> isset vs empty </li>";
//
//    $x;
//    var_dump(isset($x));  # false
//    var_dump(empty($x)); # true


//    $y= null;
//    var_dump(isset($y));  # false
//    var_dump(empty($y)); # true


//    $y= "";  # variable is set with one of the
//    #falsy values, but still empty
//    var_dump(isset($y));  # true
//    var_dump(empty($y)); # true



//    $m = "10";
//    var_dump(isset($m));  # true
//    var_dump(empty($m)); # empty


    var_dump(isset($h));  #false
    var_dump(empty($h)); # true

































































