<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 9</title>
</head>
<body>
    <!-- action kisminda verilerin gönderileceği php dosyasini seciyoruz. bu index.php de olabilir ama biz kontrol
    işlemini başka bir sayfada yapacagiz.-->
    <!-- post ve get metodunun en buyuk farki get metotta url linkinde veriler gozukur. Bunu gereksiz veriler icin kullanabilirsin.
    Ama password gibi gizlemen gereken veriler varsa post kullanmak en iyisi. -->

    <!-- burada session u kontrol edeceğiz. eger session atali degilse form gozukecek. -->

    <?php
        if(isset($_SESSION['user'])){
            echo "Welcome back, " . $_SESSION['user'];
            echo "<br>";
            echo "<a href= 'signout.php'>Sign Out</a>";
        }
        else{
    ?>
    <form action="check.php" method="POST" class="signin">
        <input type="text" placeholder="Username" name="username" required><br>
        <input type="password" placeholder="Password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
    <?php
        }
    ?>

    <article>
        <?php
            if(isset($_SESSION['user']) && $_SESSION['user'] == "admin"){
        ?>
        <p>This is a special content which is avaiable for admin only.</p>
        <a href="index.php?x=5&y=7&page=index">This is a link.</a>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "GET"){
                $c = count($_GET);
                if($c > 0){
                    $var_X = $_GET['x'];
                    $var_Y = $_GET['y'];

                    echo $var_X * $var_Y; 
                }
            }
        ?>

        <?php
            }
            else if(isset($_SESSION['user']) && $_SESSION['user'] == "guest"){
        ?>
        <p>This paragraph is only visible to logged accounts.</p>
        <?php
            }
            else{
                echo "You need login to see this content";
            }
            ?>
    </article>
</body>
</html>