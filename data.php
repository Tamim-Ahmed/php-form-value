<?php
include 'database.php';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $country = $_POST['country'];
  $message = $_POST['message'];
  
  $insert = "INSERT INTO practice (Name , Email , Phone , Country , Message) VALUES ('$name' , '$email' , '$phone' , '$country' , '$message')";
  mysqli_query($connection, $insert);
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You!</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    body{background-color: #000;}
    .thank{background-color: #fff;margin-top: 250px;}
    </style>
<body>
   <div class="col-md-12 text-center thank">
    <h1>THANKS FOR YOUR FEEDBACK!!</h1>
    <h3>For Main Page Click <a href="index.php">Here.</a></h3>
    </div>
</body>
</html>