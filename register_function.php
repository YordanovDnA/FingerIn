<?php
    include_once('config.php');
    
    $username = $_POST['username'];
    $password = md5($_POST['password1']);
    $email = $_POST['email'];
    $companyName = $_POST['company-name'];
    $databaseName = strtolower($companyName);
    $databaseName = str_replace(' ', '', $databaseName);
    // Insert new company
    $sql = "INSERT INTO users (CompanyName, DatabaseName, Username, Password, Email, Privileges)
    VALUES ('$companyName', '$databaseName', '$username', '$password', '$email', 'admin' )";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error insert new company: " . mysqli_error($conn);
    }
    // Create database
    $sql = "CREATE DATABASE `$databaseName";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>