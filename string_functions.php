<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>
    <?php
    $first = "The quick brown fox";
    $second = " jumped over the lazy dog";
    $third = $first;
    $third .= $second;
    echo $third;
    ?>
</body>
</html>