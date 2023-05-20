<?php
    session_start();
    //bu dosya url uzerinden calistirilmasin diye bi if kosulu ekleyecegiz.
    // isset() kullanabilirsin !empty() yerine
    if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST)){
        $username = $_POST['username'];
        $pass = $_POST['password']; 

        if($username == "admin" && $pass = "123456"){
            echo "Sign in Succesful";
            echo "Welcome back, " . $username . "!";
            $_SESSION['user'] = "admin";
        }
        else if($username == "guest" &&  $pass = "123456"){
            echo "Sign in Succesful";
            echo "Welcome back, " . $username . "!";
            $_SESSION['user'] = "guest";
        }
        else{
            echo "Sign in Failed. Please try again";
?>

        <a href="index.php">Get Back To Login Page</a>
<?php    
        }
    }
    header("Location: index.php");
?>
