<?php 

$host="localhost";
$user="root";
$pass="";
$db="LOGIN";
$conn=new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    echo "Failed to connect to database".$conn->connect_error;
}
?>