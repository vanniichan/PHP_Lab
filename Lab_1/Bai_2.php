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
        
        if(is_numeric($a) && is_numeric($b)){
            $addition = $a + $b;
            $subtraction = $a - $b;
            $multiple = $a * $b;
       }
           if($a != 0 ){
               $div = $a / $b;
               echo "add= $addition<br>";
              echo  "Subtraction= $subtraction<br>";
              echo  "mutiple = $multiple<br>";
              echo "div = $div<br>";
              
           }
           else{ 
               echo "can't div";
           }
        } 
    ?>
</body>
</html>
