<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container fs-3'> ";


echo "<h1> Database connection </h1>";
# 1- connect to the database using PDO

$db_user="phpluxor";
$db_password="Iti123456789_";
$db_name="menia_users";

# prepare connection data
$dsn="mysql:dbname={$db_name};host=127.0.0.1;port=3306;";

$db= new PDO($dsn, $db_user, $db_password);

var_dump($db);

#################### 1- create $db to create table, using prepared statement

# 1- write query
//$table_query = "create table `menia_users`.`users`(`id` int auto_increment primary key, `name` varchar(50),
//`email` varchar (100),`password` varchar (100), `profile_pic` varchar(200))";
////var_dump($table_query);
//# 2-prepare the statemnt
//$stmt =$db->prepare($table_query);  # prepare the query for the execute
////var_dump($stmt);  # PDO Stmt ===>
//# 3- execute the statemtn
//$res=$stmt->execute();
//var_dump($res);


#######################################Insert ######################
//
//    # 1- write the query ?
    $name="noha";
    $email='nshehab@iti.gov';
    $password = 'iti';
    $profile_pic= '5344.jpg';

//    $inst_query="Insert into `menia_users`.`users`(`name`, `email`,`password`, `profile_pic`)
//    values (:username, :email, :password, :profile_pic)";
//    //var_dump($inst_query);
//
//    $inst_stmt = $db->prepare($inst_query);
//    $inst_stmt->bindParam(":username", $name);
//    $inst_stmt->bindParam(":email", $email);
//    $inst_stmt->bindParam(":password", $password);
//    $inst_stmt->bindParam(":profile_pic", $profile_pic);
//    $res=$inst_stmt->execute();
//    var_dump($res);
//    var_dump($inst_stmt->rowCount());
//    var_dump($db->lastInsertId());

##################33 update
//$new_name="Ahmed222";
//$new_email="ahmed@gmail.com";
//$id=2;
//$updatequery="UPDATE `menia_users`.users SET `name`=:newname, `email`=:newemail where `id`=:id";
//$stmt = $db->prepare($updatequery);
//$stmt->bindParam(":newname", $new_name);
//$stmt->bindParam(":newemail", $new_email);
//$stmt->bindParam(":id", $id);
//$res=$stmt->execute();
//var_dump($res);
//var_dump($stmt->rowCount());

##################### delete
//$id=2;
//$del_query="delete from `menia_users`.`users` where id=:id";
//$stmt = $db->prepare($del_query);
//$stmt->bindParam(":id",$id );
//$res = $stmt->execute();
//var_dump($stmt->rowCount());


##################  select #######

$sel_query = "Select * from `menia_users`.`users`";
$stmt = $db->prepare($sel_query);
$res=$stmt->execute();
var_dump($res);

$rows= $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($rows);




echo "<table class='table table-danger'> <tr> <th>ID</th> 
        <th>Name</th> <th>Email</th> <th>Password</th> 
          <th> Image</th> 
        <th> Edit</th> <th> Delete</th></tr> ";

foreach ($rows as $row){

    echo "<tr> <td>{$row['id']}</td> <td>{$row['name']}</td> <td>{$row['email']}</td> 
    <td>{$row['password']}</td> <td>{$row['profile_pic']}</td>
    <td><a href='edit.php?id={$row['id']}' class='btn btn-warning'> Edit</a> </td> 
    <td> <a  href='delete.php?id={$row['id']}' class='btn btn-danger'> Delete</a> </td></td> </tr>";

}
echo "<table>";
























