<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_3</title>
</head>

<body>
    <h1>Factorial</h1>
    <form method="POST">
        Enter n = <input size="10" type="text" name="n" placeholder="Input">
        <input type="submit" value="Calculate !">
    </form>
    <?php
    if (isset($_POST["n"])) {
        $n = $_POST["n"];
        $c = 1;
        if ($n >= 2) {
            for ($i = 2; $i <= $n; $i++) {
                $c *= $i;   
            }
            echo "Giai thừa từ 1 --> $n = $c";
        } elseif ($n == 1 || $n == 0) {
            echo "Giai thừa từ 1 --> $n = $c";
        } else {
            echo "n >= 0";
        }
    }
    ?>
</body>

</html>