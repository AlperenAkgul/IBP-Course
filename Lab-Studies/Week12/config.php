<?php
$server = "localhost";
$user = "root";
$password = "";
$dbName = "week12";

$connection = new mysqli($server, $user, $password, $dbName);

if($connection->connect_error){
    echo "failed to connect database" . $connection->connect_error;
}

?>
