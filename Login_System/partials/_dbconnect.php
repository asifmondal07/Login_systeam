<?php
$server="localhost";
$username="root";
$password="";
$database="users7";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("connect not succesfully");
}

    
?>