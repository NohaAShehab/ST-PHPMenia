<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container fs-3'> ";



        # open the file for writing
//
//        $fileobject = fopen("users.txt", "w");
//        # w ---> open file for writing starting from the begining of the file,
//        # if the file exists ---> remove the file content
//        # if the file is not exists  -==? try to create
//        var_dump($fileobject);
//
//        fwrite($fileobject, "My name is Noha\n");
//        fwrite($fileobject, "I works at ITI".PHP_EOL);
//        fwrite($fileobject, " <br> I teach PHP Course");
//
//
//        fclose($fileobject);
//
//        readfile("users.txt");
//
//        var_dump(file("users.txt"));

#######################
//    $htmlpage = fopen("myfile.html", "w");
//    fwrite($htmlpage, "<h1> My name is Noha </h1>");
//    header("Location:myfile.html");
//


####################3 Append
$fileobject = fopen("mycv.txt", "a");

### append mode , helps you to append data to the exsiting file

#### append ---> if the file exists ---> add text to the file starting from
# the end of file
#
# if the file is not exists will try to create the file
#

fwrite($fileobject, "######################3 \n");
fwrite($fileobject, "$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ \n");
fclose($fileobject);


readfile("mycv.txt");











