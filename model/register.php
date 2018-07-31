<?php
include 'DbConnection.php';
if(isset($_POST['submit'])){
    session_start();
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $password2 = $_POST['rpwd'];
    if($password == $password2){
        $password = md5($password);
        $sql = "INSERT INTO users(nume,prenume,email,password) VALUES ('$nume','$prenume','$email','$password')";
        mysqli_query($con,$sql);
        header("location: login.php");
    }else{

    }
}
?>