<?php
session_start();
if (isset($_SESSION["login"])){
    if ($_SESSION["login"]){
    header("Location:home.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1> Login </h1>
    <form method="POST" action="checklogin.php">
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email"
                   class="form-control">
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" name="password" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>