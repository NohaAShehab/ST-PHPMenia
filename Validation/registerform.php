<?php
    $errors=[];
    if(count($_GET) >0 ){  # count number of elements in the array
//        var_dump($_GET);
        if (isset($_GET["errors"])){
            $errors = json_decode($_GET["errors"]);
            $errors=(array)$errors;
//            var_dump($errors);
        }
        if(isset($_GET["old_data"])){
            $old_data= json_decode($_GET["old_data"]);
            $old_data=(array)$old_data;
//            var_dump($old_data);
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
    <h1> Please fill in your data </h1>
    <form method="POST" action="register.php">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name"
                   value="<?php if(isset($old_data["name"])){echo $old_data['name'];}?>"

                   class="form-control">
            <label style="color: red"><?php if(isset($errors["name"])){echo "please fill in the name";} ?></label>
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email"
                   value="<?php if(isset($old_data["email"])){echo $old_data['email'];}?>"

                   class="form-control">
            <label style="color: red"><?php if(isset($errors["email"])){echo "please fill in the email";} ?></label>

        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" name="password" class="form-control" >
            <label style="color: red"><?php if(isset($errors["password"])){echo "please fill in the password";} ?></label>

        </div>
        <div class="mb-3">
            <label> Hoppies </label>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="hoppies[]" value="reading" >
            <label class="form-check-label" >
                Reading
            </label>
        </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hoppies[]" value="sleeping" >
                <label class="form-check-label" >
                    Sleeping
                </label>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>