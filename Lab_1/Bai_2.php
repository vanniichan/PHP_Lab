<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_2</title>
</head>
<body>
    <h1>Calculator Basic </h1>
    <form  method="POST">
    a <input type="text" name="a"><br>
    <br>
    b <input type="text" name="b"><br>
    <br>
    <input  type="submit" value="Calculate!">
    </form>
    <?php
     if (isset($_POST["a"] , $_POST["b"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo "Addition: ".($a + $b)."<br>";
        echo "Substraction: ".($a - $b)."<br>";
        echo "Multiplication: ".($a * $b)."<br>";
        echo "Division: ".($a / $b)."<br>";
     }
    ?>
</body>
</html>