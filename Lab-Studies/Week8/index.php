<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 8</title>
</head>
<body>
    <?php
        $intNum = 50;
        $doubleNum = 5.6;
        $str = "The value is: ";

        echo $str . adding($intNum, $doubleNum);

        function adding($n1, $n2){
            return $n1 + $n2;
        }
    ?>
</body>
</html>