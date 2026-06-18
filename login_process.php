<?php
session_start();
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if($row = mysqli_fetch_assoc($result)) {

    if(password_verify($password, $row['password'])) {
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];

        header("Location: index.php");
        exit();
    } 
    else {
        echo "<script>alert('Wrong Password'); window.location='login.php';</script>";
    }
}
else {
    echo "<script>alert('Account Not Found'); window.location='register.php';</script>";
}
?>
