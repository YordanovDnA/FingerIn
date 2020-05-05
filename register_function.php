<?php
    include_once('config.php');
    $username = $_POST['username'];
    $password = md5($_POST['password1']);
    $email = $_POST['email'];

    $sql = "INSERT INTO users (Username, Password, Email) values('$username', '$password', '$email')";
    if($conn->query($sql) === TRUE){
        header("Location: index.html");
    }
    else{
        "Something is wrong!";
    }
?>