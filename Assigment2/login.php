<?php 
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if($email === 'thirichithan@gmail.com' && $password === 'password'){
$_SESSION['user'] = ['username' => 'Thiri'];
header('location: hello.php');
exit();
}elseif($email === 'david@gmail.com' && $password === 'password'){
    $_SESSION['user'] = ['username' => 'David'];
    header('location: hello.php');
    exit();
}elseif($email === 'jhon@gmail.com' && $password === 'password'){
    $_SESSION['user'] = ['username' => 'Jhon'];
    header('location: hello.php');
    exit();
}elseif($email === 'sam@gmail.com' && $password === 'password'){
    $_SESSION['user'] = ['username' => 'Sam'];
    header('location: hello.php');
    exit();
}elseif($email === 'olivia@gmail.com' && $password === 'password'){
    $_SESSION['user'] = ['username' => 'Olivia'];
    header('location: hello.php');
    exit();
}
else {
    header('location: index.php');
    exit();
}
?>