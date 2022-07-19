<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container fs-3'> ";

    #######################3 Reading from a file

//    $fileobject =fopen("mycv.txt", "r");
//    # read mode ---> read file content from the begining
//    var_dump($fileobject);  # False
    # fileobject  -=> resoruce --> you can use
    # in read or write operation.
//
//    ### to read data from the file
//    # fread(resourceobject, noof_bytes)
//    # you need to calculate the filesize
//    $fsize = filesize("mycv.txt");
////    # readfile content into a string
//    $filedata=fread($fileobject, $fsize);
////    var_dump($filedata);
////    echo $filedata;
//    fclose($fileobject);
//
//    # to read file line by line
    $filelines = file("mycv.txt");
//    # put each line as a item in the array
    var_dump($filelines);
//    foreach ($filelines as $line){
//        echo "{$line} <br>";
//    }


    readfile("mycv.txt");
    # read file content and output to the browser ?