<?php

$host = "localhost";
$user="root";
$pass = "";
$db="Website";
$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failedto connect DB" .$conn->connect_error;
} else {
    echo "SUCCES BOSS!" .$conn
}
?>
