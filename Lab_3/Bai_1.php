<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_1</title>
</head>

<body>
    <form method="POST">
        <h2>Login</h2>
        username:<br> <input type="text" name="user" required><br>
        <br>
        password:<br> <input type="password" name="pas" required><br>
        <br>
        <input type="submit" value="Login">
    </form>
    <?php
    if (isset($_POST["user"], $_POST["pas"])) {
        $user = $_POST["user"];
        $pas = $_POST["pas"];
        
        if($user === 'admin' && $pas === '123123'){
            echo "You are admin";
        }elseif($user === "user" && $pas === "12345"){
            echo "Welcome back $user !";
        }else{
            echo "Check your user or pass";
        }
    
    }


    ?>

</body>

</html>