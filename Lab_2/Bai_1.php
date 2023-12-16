<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_2</title>
</head>
<body>
    <h1>Phương Trình Bậc Nhất ax+b=0</h1>
    <form  method="POST">
    <input size="3" type="text" name="a" placeholder="a"> x + 
    <input size="3" type="text" name="b" placeholder="b"> = 0
    <input  type="submit" value="Solve">
    
    </form>
    <?php
if (isset($_POST["a"] , $_POST["b"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];

        if($a!=0 && $b!=0){
            $c = -$b/$a;    
            echo "<br>Phuơng trình có nghiệm là: x = $c";       
        }elseif($b == 0){
            echo "<br>Phuơng trình vô số nghiệm";
        }
        else{             
            echo "<br>Phuơng trình vô nghiệm";
        }       
    }
        
    ?>
</body>
</html>