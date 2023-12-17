<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <?php
    $user = $_GET["user"];
    if($user === "admin"){
        echo "<h1 style='color: red;'>You are admin</h1>";
    }else{
        echo "<h1 style='color: purple;'>Welcome, $user!</h1>";
    }
    
    ?>
</body>