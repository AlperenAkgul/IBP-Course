<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 10</title>
</head>
<body>
    <form method= "POST" action="check.php">
        <label>Full Name: </label><br>
        <input type="text" name="name" placeholder="Full Name" required><br>
        <br>
        <label>E-Mail Address: </label><br>
        <input type="email" name="email" placeholder="E-Mail" required><br>
        <br>
        <label>Gender: </label><br>
        <input type="radio" name="gender" value="Male">Male <br>
        <input type="radio" name="gender" value="Female">Female <br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>