<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_2</title>
</head>

<body>
    <h1>Sum 1 ---> n</h1>
    <form method="POST">
        Enter n = <input size="10" type="text" name="n" placeholder="Input">
        <input type="submit" value="Calculate !">
    </form>
        <?php
        if (isset($_POST["n"])) {
            $n = $_POST["n"];
            if($n > 0){
                $c = $n*($n+1)/2;
                echo "Sum = $c";
            }else{
                echo "n > 0";
            }
        }
        ?>

</body>

</html>