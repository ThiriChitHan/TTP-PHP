<?php
 session_start();
 if(!isset($_SESSION['user'])) {
 header('location: index.php');
 exit();
 }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello
    <a href="login.php">logout</a>
</body>
</html>