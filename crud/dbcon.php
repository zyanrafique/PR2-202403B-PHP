<?php
$server = "mysql:host=localhost;dbname=signin";
$user = "root";
$password = "";
$pdo = new PDO($server , $user , $password);
if($pdo){
    echo "<script>alert('connection with database ')</script>";
}
?>