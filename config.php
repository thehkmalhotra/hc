<?php
//Connecting Database//
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "itsmyhashyapp";
    $con = new PDO("mysql:host=$server; dbname=$dbname",$user,$pass);
?>