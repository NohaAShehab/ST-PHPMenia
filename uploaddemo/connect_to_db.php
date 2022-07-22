<?php


############# save data in database
### 1- connect
$db_user="phpluxor";
$db_password="Iti123456789_";
$db_name="menia_users";
$dsn="mysql:dbname={$db_name};host=127.0.0.1;port=3306;";
$db= new PDO($dsn, $db_user, $db_password);

//var_dump($db);


