<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container fs-3'> <h1> All users from database </h1>";

##########3 3-display data into a table

############# connect to database
include ("connect_to_db.php");
//var_dump($db);

###########3 get all users
$sel_query = "Select * from `menia_users`.`users`";
$stmt = $db->prepare($sel_query);
$res=$stmt->execute();
//var_dump($res);

$rows= $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($rows);


###################### draw data in the table
echo "<table class='table table-danger'> <tr> <th>ID</th> 
        <th>Name</th> <th>Email</th> <th>Password</th> 
          <th> Image</th> 
        <th> Edit</th> <th> Delete</th></tr> ";

foreach ($rows as $row){

    echo "<tr> <td>{$row['id']}</td>
               <td>{$row['name']}</td> 
               <td>{$row['email']}</td> 
               <td>{$row['password']}</td> 
               <td><img src='{$row['profile_pic']}' width='50' height='50'> </td>
               <td><a href='edit.php?id={$row['id']}' class='btn btn-warning'> Edit</a> </td> 
               <td> <a  href='delete.php?id={$row['id']}' class='btn btn-danger'> Delete</a> </td> 
               </tr>";
}
echo "<table>";





echo "<a href='registerform.php' class='btn btn-primary'> Add new User </a>";
//

