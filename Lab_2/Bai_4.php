<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_4</title>
</head>

<body>
    <?php
    $my_array = array('EHC', 'HackYourLimits', 'Training');
    $minLength = strlen($my_array[0]);
    $maxLength = strlen($my_array[0]);

    foreach ($my_array as $value) {
        $length = strlen($value);
        if ($length < $minLength) {
            $minLength = $length;
        }
        if ($length > $maxLength) {
            $maxLength = $length;
        }
    }
    echo '$my_array = array("EHC", "HackYourLimits", "Training")<br>';
    echo "minLength = $minLength; maxLength = $maxLength;";
    ?>
</body>

</html>