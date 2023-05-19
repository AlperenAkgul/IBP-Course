<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $gender = $_GET['gender'];
        echo "Name: " . $name. 
        " Surname: " . $surname.
        " Gender: " . $gender;
    ?>
</body>
</html>