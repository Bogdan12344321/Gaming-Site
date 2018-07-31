<?php
session_start();
include 'DbConnection.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['pwd'];

        $password = md5($password);
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result) == 1) {
            $_SESSION['message'] = "You are now logged in!";
            $_SESSION['email'] = $email;
            header("location: ../../index.php");
        }
 }
 ?>